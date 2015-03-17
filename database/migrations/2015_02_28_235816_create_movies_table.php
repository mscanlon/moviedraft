<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->string('rating')->nullable();
            $table->integer('runtime')->unsigned()->nullable();
            $table->date('release_date')->nullable();
            $table->text('synopsis')->nullable();
            $table->integer('tomatoes_id')->unsigned()->nullable()->unique();
            $table->integer('box_office_id')->unsigned()->nullable();
			$table->bigInteger('earnings')->unsigned()->default(0);
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
		Schema::drop('movies');
	}

}
