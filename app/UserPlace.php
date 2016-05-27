<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPlace extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_place';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id', 'place_id'];

}
