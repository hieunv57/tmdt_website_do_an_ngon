<?php namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class RatePlace extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'rate_place';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['point', 'user_id', 'place_id'];

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

    public function findRatebyPlace($place_id)
    {
    	$rate=DB::table('rate_place')->select('rate_place.*')
    		->where('place_id', '=' , $place_id);
  		return $rate;
    }

}
