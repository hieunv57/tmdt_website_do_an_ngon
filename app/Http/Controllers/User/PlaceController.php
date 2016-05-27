<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Place;
use App\Category;
use Illuminate\Http\Request;
use App\UserPlace;
use Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\WishListPlace;
use App\Foods;
use File;
use DB;
use App\CategoryPlace;

class PlaceController extends Controller {

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
		$postedplace = new Place;
		$postedplace = $postedplace->findPlaceUser()->get();
		$postedfood = new Foods;
		$postedfood = $postedfood->findFoodUser()->get();
		$place_new = new Place;
		$place_new = $place_new->find_New(9)->get();
		$parent = Category::select('id', 'name', 'parent_id')->get();
		return view('fontend.pages.place.insert', compact('parent', 'place_new', 'postedplace','postedfood'));
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
        $place = new Place;
        $place ->name = $input['name'];
        $place ->link = $this->stripUnicode($input['name']);
        $place ->address = $input['address'];
        $place ->description = $input['description'];
        $place ->video = $input['video'];
        $place ->phone = $input['phone'];
        $place ->image = $file_name;
        // $product ->cate_id = $request->sltParent;
        $request ->file('fImages')->move('public/backend/images/places/',$file_name);
        $place ->save();
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
        $user_places = new UserPlace;
        $user_places->place_id=$place->id;
        $user_places->user_id=Auth::user()->id;
        $user_places->save();

       
        $q=DB::table('users')->select('quantity_posted_place')->where('id','=', Auth::user()->id)->first();
        $quantity_posted_place = $q->quantity_posted_place+1;
        $query = DB::table('users')
	            ->where('id', Auth::user()->id)
	            ->update(['quantity_posted_place' => $quantity_posted_place]);
        
        $category_places= new CategoryPlace;
        $category_places->place_id= $place->id;
        $category_places->category_id= $input['category'];
        $category_places->save();
        $category_place= new CategoryPlace;
        $category_parent=DB::table('category')->select('parent_id')->where('id','=',$category_places->category_id)->first();
        if ($category_parent->parent_id!=0){
            $category_place->place_id=$place->id;
            $category_place->category_id=$category_parent->parent_id;
            $category_place->save();
        }


        return redirect('dang-dia-diem')->with(['flash_level'=>'success','flash_message'=> 'Thêm địa điểm thành công']);
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
		$place = Place::find($id);
        File::delete('public/backend/images/places/'.$place->image); 
        $place->delete($id);
        return redirect('nguoi-dung/dia-diem-da-dang')->with(['flash_level'=>'success','flash_message'=> 'Xóa thành công!']);
	}

	public function postedplace()
	{
		$postedplace = new Place;
		$postedplace = $postedplace->findPlaceUser()->get();
		$postedfood = new Foods;
		$postedfood = $postedfood->findFoodUser()->get();
		return view('fontend.pages.user.postedplace', compact('postedplace', 'postedfood'));
	}

	//thêm địa điểm vào yêu thích
	public function addWishListPlace($id){
        $wishList = new WishListPlace;
        $wishList->user_id=Auth::user()->id;
        $wishList->place_id=$id;
        $temp=DB::table('wishlist_place')->where('user_id','=',Auth::user()->id)->where('place_id',$id)->first();
        if (!$temp){
            $wishList->save();
        }
        return Redirect::back();
    }

    public function wishListPlace(){
        $wishlists= new WishListPlace;
        $wishlists=$wishlists->findAll()->get();
        return view('pages.wishlist',compact('wishlists'));
    }

}
