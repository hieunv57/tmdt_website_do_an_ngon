<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use App\Foods;
use Auth;
use App\Place;
use App\CategoryFood;
use App\UserFood;
use Illuminate\Http\Request;

class FoodController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$postedfood = new Foods;
		$postedfood = $postedfood->findFoodUser()->get();
		$postedplace = new Place;
		$postedplace = $postedplace->findPlaceUser()->get();
		$food_new = new Foods;
		$food_new = $food_new->findFoodNew(6)->get();
		$parent = Category::select('id', 'name', 'parent_id')->get();
		return view('fontend.pages.foods.insert', compact('food_new', 'parent','postedfood','postedplace'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input=$request->all();
		$fileimage = $request->file('fImages')->getClientOriginalName();
		$file_name=$this->stripUnicode($fileimage);
        $food = new Foods;
        $food ->name = $input['name'];
        $food ->link = $this->stripUnicode($input['name']);
        $food ->address = $input['address'];
        $food ->description = $input['description'];
        $food ->video = $input['video'];
        $food ->price = $input['price'];
        $food ->image = $file_name;
        // $product ->cate_id = $request->sltParent;
        $request ->file('fImages')->move('public/backend/images/foods/',$file_name);
        $food ->save();
        // $products_id = $product->id;
        // if(Input::hasFile('fProductDetail'))
        // {
        //     foreach(Input::file('fProductDetail') as $file){
        //         $product_img = new ImagePlace();
        //         if(isset($file))
        //         {
        //             $product_img->image = $file->getClientOriginalName();
        //             $product_img->products_id = $products_id;
        //             $file->move('public/home/images/products_detail/',$file->getClientOriginalName());
        //             $product_img->save();
        //         }
        //     }
        // }
        $user_foods = new UserFood;
        $user_foods->food_id=$food->id;
        $user_foods->user_id=Auth::user()->id;
        $user_foods->save();
        
        $category_foods = new CategoryFood;
        $category_foods->food_id= $food->id;
        $category_foods->category_id= $input['category'];
        $category_foods->save();
        $category_food = new CategoryFood;
        $category_parent=DB::table('category')->select('parent_id')->where('id','=',$category_foods->category_id)->first();
        if ($category_parent->parent_id!=0){
            $category_food->food_id=$food->id;
            $category_food->category_id=$category_parent->parent_id;
            $category_food->save();
        }


        return redirect('dang-mon-ngon')->with(['flash_level'=>'success','flash_message'=> 'Đăng món ăn thành công']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($link_food)
	{
		$food_details = new Foods;
        $food_details = $food_details->findFoodDetails($link_food)->first();
		
		// $place_detail = DB::table('place')->where('link',$link_food)->first();
		
		$q = DB::table('foods')->where('link',$link_food)->first();
        $view = $q->view+1;
        $query = DB::table('foods')->where('link',$link_food)
      	->update(['view'=> $view]);
      	

      	
      
      	$category = new Category;
        $category = $category->findCategoryName($food_details->category_link)->first();
      	$related = new Foods;
        $related = $related->findRelatedFood($category->id)->get();
        
        
      	
		// $place = new Place;
  //       $place = $place->findCategory($category->id)->paginate(9);
  //       dd($place);

        $image = DB::table('images_foods')->select('id', 'image')->where('food_id', $food_details->id)->get();

        //đưa ra sản phẩm liên quan
  //       $place = new Place;
  //       $place = $place->place()->get();
  //       $related = Place::whereHas('link', function($query) use($place) 
		// { 
		//     $query->where('name', $place->link); 
		// })->whereNotIn('name', [$place->name])->get();
		// dd($related);

		// đưa ra random 10 địa điểm
		$random_foods = Foods::orderByRaw("RAND()")->get()->take(3);
		$wishlist_foods = new WishListFood;
		$wishlist_foods = $wishlist_foods->findAllWishListFood()->get();

        return view('fontend.pages.foods.show', compact('food_details', 'image', 'random_foods', 'related','wishlist_place'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$foods = Foods::find($id);
        File::delete('public/backend/images/foods/'.$foods->image); 
        $foods->delete($id);
        return redirect('dia-diem-da-dang')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công!']);
	}

}
