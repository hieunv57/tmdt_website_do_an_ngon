<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFood extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category_foods';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'category_id', 'food_id'];
}
