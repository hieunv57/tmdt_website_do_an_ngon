<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class CategoryPlace extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category_place';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'category_id', 'place_id'];

}
