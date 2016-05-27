<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFood extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_foods';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'food_id'];

}
