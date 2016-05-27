<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagePlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image_place', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('image');
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
		Schema::drop('image_place');
	}

}
