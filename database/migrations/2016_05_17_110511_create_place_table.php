<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->string('video');
			$table->string('link');
			$table->string('phone');
			$table->longText('description');
			$table->integer('view');
			$table->string('image');
			$table->string('rate');
			$table->string('kind');
			$table->integer('price');
			$table->string('timeopen');
			$table->integer('total_wishlist');
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
		Schema::drop('place');
	}

}
