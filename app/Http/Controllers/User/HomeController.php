<?php namespace App\Http\Controllers\User;

use App\Providers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Place;
use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Foods;
use App\WishListPlace;
use Session;
use App\CommentsPlace;
use Auth;

class HomeController extends Controller {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$place_new = new Place;
		$place_new = $place_new->find_New(6)->get();
		$place_most_view = new Place;
		$place_most_view = $place_most_view->findPlaceMostView(6)->get();
		$place_most_wishlist = new Place;
		$place_most_wishlist = $place_most_wishlist->findPlaceMostWishList(6)->get();
		//đưa ra số người đăng nhiều sản phẩm nhất
		$user_post_most_place = new Place;
		$user_post_most_place = $user_post_most_place->findUserPostMostPlace()->get();
		//đưa ra địa điểm yêu thích
		if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
		//Món ăn
		$food_new = new Foods;
		$food_new = $food_new->findFoodNew(6)->get();
		$highpoint = new Place;
		$highpoint = $highpoint->findHighPoint(6)->get();
		return view('fontend.pages.index', compact('place_new', 'place_most_wishlist', 'place_most_view', 'highpoint','user_post_most_place','wishlist_place', 'food_new'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function category($link)
	{
		$category = new Category;
        $category = $category->findCategoryName($link)->first();
		$place = new Place;
        $place = $place->findCategory($category->id)->paginate(9);
        $place->setPath($category->link);
        $total = $place -> count();
        if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
		return view('fontend.pages.category', compact('place','category', 'total','wishlist_place'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($link_place)
	{
		$place_detail  = new Place;
        $place_detail  = $place_detail->findPlaceDetails($link_place)->first();
		
		// $food_detail = DB::table('place')->where('link',$link_place)->first();
		
		$q = DB::table('place')->where('link',$link_place)->first();
        $view = $q->view+1;
        $query = DB::table('place')->where('link',$link_place)
      	->update(['view'=> $view]);
      	

      	
      
      	$category = new Category;
        $category = $category->findCategoryName($place_detail->category_link)->first();
      	$related = new Place;
        $related = $related->findRelatedPlace($category->id)->get();
        
        $image = DB::table('image_place')->select('id', 'image')->where('place_id', $place_detail->id)->get();

		// đưa ra random 10 địa điểm
		$random_place = Place::orderByRaw("RAND()")->get()->take(3);
		if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
		$cmt = new CommentsPlace;
		$cmt = $cmt->findComment($link_place)->get();
		$new_place = new Place;
		$new_place = $new_place->find_New(4)->get();
        return view('fontend.pages.place.show', compact('place_detail','new_place','cmt', 'image', 'random_place', 'related','wishlist_place'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showfood($link_food)
	{
		$food_detail = new Foods;
        $food_detail = $food_detail->findFoodDetails($link_food)->first();
		
		// $food_detail = DB::table('place')->where('link',$link_place)->first();
		
		$q = DB::table('foods')->where('link',$link_food)->first();
        $view = $q->view+1;
        $query = DB::table('foods')->where('link',$link_food)
      	->update(['view'=> $view]);
      	

      	
      
      	$category = new Category;
        $category = $category->findCategoryName($food_detail->category_link)->first();
      	$related = new Place;
        $related = $related->findRelatedPlace($category->id)->get();
        
        
      	
		// $place = new Place;
  //       $place = $place->findCategory($category->id)->paginate(9);
  //       dd($place);

        $image = DB::table('images_foods')->select('id', 'image')->where('food_id', $food_detail->id)->get();

       	$related = new Foods;
        $related = $related->findRelatedFoods($category->id)->get();

		// đưa ra random 10 địa điểm
		$random_food = Place::orderByRaw("RAND()")->get()->take(3);
		if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}

        return view('fontend.pages.foods.show', compact('food_detail', 'image', 'random_food','related','wishlist_place'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function tag(Request $request){
        $input=$request->all();
        Session::put('tag',$input['search']);
        return redirect('tim-kiem');
    }

    public function search(){
        $tag=Session('tag');
        $place= new Place;
        $place=$place->SearchPlace($tag)->paginate(8);

        $place->setPath('tim-kiem');
        $total=$place -> count();
        if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
        // $place = Place::search($tag)->get();
        // dd($place);
        // $hotProducts=new Products;
        // $hotProducts=$hotProducts->findHot();
        return view('fontend.pages.place.search',compact('place', 'total','wishlist_place'));
    }


	public function mostviewplace()
	{
		$place = new Place;
		$place = $place->findMostView()->get();
		return view('fontend.pages.danh-sach.mostviewplace');
	}


	public function placemostview()
	{
		$placemostview = new Place;
		$placemostview = $placemostview->findPlaceMostView(10)->get();
		if(!Auth::guest())
		{
			$wishlist_place = new WishListPlace;
			$wishlist_place = $wishlist_place->findAllWishListPlace()->get();
		}
		return view('fontend.pages.danh-sach.dia-diem-xem-nhieu-nhat', compact('placemostview','wishlist_place'));
	}
}
