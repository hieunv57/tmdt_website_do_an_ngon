<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_place', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();;
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
			$table->integer('place_id')->unsigned();
            $table->foreign('place_id')->references('id')->on('place')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_place');
	}

}
