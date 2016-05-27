<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryFoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_foods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();;
			$table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');;
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
		Schema::drop('category_foods');
	}

}
