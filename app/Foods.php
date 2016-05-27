<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class Foods extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'foods';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'address', 'description', 'view', 'video', 'kind', 'image', 'price', 'total_wishtlist'];

	public function findAllFood()
    {
    	$food=DB::table('foods')->select('foods.*', 'users.name as name_user')
            ->join('user_foods','foods.id','=','user_foods.food_id')
            ->join('users','user_foods.user_id','=','users.id')
            // ->join('categories_products','products.id','=','categories_products.product_id')
            // ->join('categories', 'categories_products.categories_id','=','categories.id')
            ->groupby('foods.id')
            ->orderby('foods.created_at', 'desc');
            return $food;
    }

    public function findFoodNew($soluong)
    {
    	$foods=DB::table('foods')->select('foods.*', 'users.name as name_user')
            ->join('user_foods','foods.id','=','user_foods.food_id')
            ->join('users','user_foods.user_id','=','users.id')
            ->groupby('foods.id')
            ->orderby('foods.created_at', 'desc')->take($soluong);
            return $foods;
    }
     public function findFoodUser()
    {
    	$id=Auth::user()->id;
    	$food=DB::table('foods')->select('foods.*', 'users.name as name_user')
            ->join('user_foods','foods.id','=','user_foods.food_id')
            ->join('users','user_foods.user_id','=','users.id')
            ->where('user_foods.user_id','=', $id)
            ->groupby('foods.id');
        return $food;
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

     public function findFoodDetails($link)
    {
        $foods=DB::table('foods')->select('foods.*', 'category.link as category_link', 'category.name as category_name','users.name as name_user')
            ->join('category_foods','foods.id','=','category_foods.food_id')
            ->join('category','category_foods.category_id','=','category.id')
            ->join('user_foods','foods.id','=','user_foods.food_id')
            ->join('users','user_foods.user_id','=','users.id')
            ->where('foods.link','=', $link);
        return $foods;
    }
     public function findRelatedFoods($id)
    {
       $foods=DB::table('foods')->select('foods.*', 'category.link as category_link', 'users.name as name_user', 'category.name as category_name')
            ->join('category_foods','foods.id','=','category_foods.food_id')
            ->join('category', 'category_foods.category_id','=','category.id')
            ->join('user_foods','foods.id','=','user_foods.food_id')
            ->join('users','user_foods.user_id','=','users.id')
            ->where('category_foods.category_id','=', $id)
            ->groupby('foods.id')
            ->orderby('foods.created_at', 'desc')->take(3);
            return $foods;
    }
}
