<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class Place extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'place';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'address', 'description', 'phone', 'view', 'video', 'kind', 'image', 'price', 'timeopen'];

	public function find_New($soluong)
    {
         $place=DB::table('place')->select('place.*', 'users.name as name_user')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->groupby('place.id')
            ->orderby('place.created_at', 'desc')->take($soluong);
            return $place;
    }

    public function findNewPlace()
    {
         $place=DB::table('place')->select('place.*', 'users.name as name_user')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->groupby('place.id')
            ->orderby('place.created_at', 'desc')->take(1000);
            return $place;
    }


    public function findPlaceMostView($soluong)
    {
        $place=DB::table('place')->select('place.*', 'users.name as name_user')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->groupby('place.id')
            ->orderby('place.view', 'desc')->take($soluong);
            return $place;
    }

    public function findPlaceDetails($link)
    {
    	$place=DB::table('place')->select('place.*', 'category.link as category_link', 'category.name as category_name','users.name as name_user')
	        ->join('category_place','place.id','=','category_place.place_id')
	        ->join('category','category_place.category_id','=','category.id')
	        ->join('user_place','place.id','=','user_place.place_id')
	        ->join('users','user_place.user_id','=','users.id')
            // ->join('comments_place','place.id','=','comments_place.place_id')
	        ->where('place.link','=', $link);
	    return $place;
    }
   

     public function findRelatedPlace($id)
    {
       $place=DB::table('place')->select('place.*', 'category.link as category_link', 'users.name as name_user', 'category.name as category_name')
            ->join('category_place','place.id','=','category_place.place_id')
            ->join('category', 'category_place.category_id','=','category.id')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->where('category_place.category_id','=', $id)
            ->groupby('place.id')
            ->orderby('place.created_at', 'desc')->take(3);
            return $place;
    }

    public function findCategory($id)
    {
       $place=DB::table('place')->select('place.*', 'category.link as category_link', 'users.name as name_user', 'category.name as category_name')
            ->join('category_place','place.id','=','category_place.place_id')
            ->join('category', 'category_place.category_id','=','category.id')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->where('category_place.category_id','=', $id)
            ->groupby('place.id');
            return $place;
    }

    public function findPlace($link){
        $place=DB::table('place')->select('place.*', 'category.name as cate_name','users.name as name_user')
            ->join('category_place','place.id','=','category_place.place_id')
            ->join('category','category_place.category_id','=','category.id')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
           
            ->where('link',$link)->first();
        return $place;
    }

    public function searchPlace($string){
        $chuoi=stripUnicode($string);
        $place=DB::table('place')->select('place.*', 'category.link as category_name', 'users.name as name_user')
        ->join('category_place','place.id','=','category_place.place_id')
        ->join('category','category_place.category_id','=','category.id')
        ->join('user_place','place.id','=','user_place.place_id')
        ->join('users','user_place.user_id','=','users.id')
        ->groupBy('place.id')
        ->where('place.name','like','%'.$string.'%')->orWhere('place.link','like','%'.$string.'%')
                ->orWhere('place.address','like','%'.$string.'%')->orWhere('place.price','like','%'.$string.'%')
                ->orwhere('users.name', 'like', '%'.$string.'%')->orwhere('place.kind', 'like', '%'.$string.'%');
        return $place;
    }

      public function searchFood($string){
        $chuoi=stripUnicode($string);
        $foods=DB::table('foods')->select('foods.*', 'category.link as category_name', 'users.name as name_user')
        ->join('category_foods','foods.id','=','category_foods.food_id')
        ->join('category','category_foods.category_id','=','category.id')
        ->join('user_foods','foods.id','=','user_foods.food_id')
        ->join('users','user_foods.user_id','=','users.id')
        ->groupBy('foods.id')
        ->where('foods.name','like','%'.$string.'%')->orWhere('foods.link','like','%'.$string.'%')
                ->orWhere('foods.address','like','%'.$string.'%')->orWhere('foods.price','like','%'.$string.'%')
                ->orwhere('users.name', 'like', '%'.$string.'%')->orwhere('foods.kind', 'like', '%'.$string.'%');
        return $foods;
    }

    public function place()
    {
    	$place=DB::table('place')->select('place.*', 'users.name as name_user')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            // ->join('categories_products','products.id','=','categories_products.product_id')
            // ->join('categories', 'categories_products.categories_id','=','categories.id')
            ->groupby('place.id');

            return $place;

    }

    public function findAllPlace()
    {
    	$place=DB::table('place')->select('place.*', 'users.name as name_user')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            // ->join('categories_products','products.id','=','categories_products.product_id')
            // ->join('categories', 'categories_products.categories_id','=','categories.id')
            ->groupby('place.id')
            ->orderby('place.created_at', 'desc');
            return $place;

    }

    public function findPlaceUser()
    {
    	$id=Auth::user()->id;
    	$place=DB::table('place')->select('place.*', 'users.name as name_user')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->where('user_place.user_id','=', $id)
            ->groupby('place.id');
        return $place;
    }

    public function findUserPostMostPlace()
    {
        $place=DB::table('place')->select('place.*', 'category.name as cate_name','users.name as name_user','users.id as id_user', 'users.email as email_user','users.quantity_posted_place as posted')
            ->join('category_place','place.id','=','category_place.place_id')
            ->join('category','category_place.category_id','=','category.id')
            ->join('user_place','place.id','=','user_place.place_id')
            ->join('users','user_place.user_id','=','users.id')
            ->groupby('users.id')
            ->orderby('users.quantity_posted_place', 'desc')->take(10);
        return $place;
    }

}
