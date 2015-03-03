<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftBoardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('draft_boards', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('draft_id')->unsigned();
			$table->foreign('draft_id')->references('id')->on('drafts')->onDelete('cascade');
            
            $table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            
            $table->integer('user_id')->unsigned()->nullable();
            
            $table->integer('bid')->unsigned()->default(0);
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
		Schema::drop('draft_boards');
	}

}
