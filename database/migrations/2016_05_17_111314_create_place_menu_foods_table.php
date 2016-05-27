<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceMenuFoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place_menu_foods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('place_id')->unsigned();;
			$table->foreign('place_id')->references('id')->on('place')->onDelete('cascade');;
			$table->integer('food_id')->unsigned();
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
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
		Schema::drop('place_menu_foods');
	}

}
