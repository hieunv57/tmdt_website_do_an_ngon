<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'category';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'link', 'description', 'parent_id', 'level'];

	public function findCategoryName($link){
        $cate = DB::table('category')->where('link','=',$link);
        return $cate;
    }

    public function findCategoryName1($link_category){
        $cate = DB::table('category')->where('link','=',$link_category);
        return $cate;
    }
}
