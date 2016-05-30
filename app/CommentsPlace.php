<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class CommentsPlace extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments_place';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['comment', 'user_id', 'place_id'];

	 public function findComment()
    {
        $cmt=DB::table('comments_place')->select('comments_place.*', 'users.name as user_name','users.avatar as user_avatar')
            ->join('place','comments_place.place_id','=','place.id')
            ->join('users','comments_place.user_id','=','users.id')
            ->groupby('comments_place.id');
        return $cmt;
    }
}
