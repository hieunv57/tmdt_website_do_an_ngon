<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class wishlistPlace extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'wishlist_place';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'place_id', 'user_id'];

	public function findAllWishListPlace(){
    	$wishList= DB::table('WishList_place')->select('place.*','category.link as category_link','wishlist_place.id as wishlist_place_id', 'users.name as name_user')
	    	->join('place','place.id','=','wishlist_place.place_id')
	    	->join('category_place','place.id','=','category_place.place_id')
	        ->join('category','category_place.category_id','=','category.id')
	        ->join('user_place','place.id','=','user_place.place_id')
	        ->join('users','user_place.user_id','=','users.id')
	        ->where('wishlist_place.user_id','=', Auth::user()->id)
	        ->groupBy('place.id');
        return $wishList;
    }
}
