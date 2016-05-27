<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_place', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();;
			$table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');;
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
		Schema::drop('category_place');
	}

}
