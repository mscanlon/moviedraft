<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drafts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('total_bid')->unsigned();
			$table->timestamps();
		});
		
		Schema::create('draft_user', function(Blueprint $table)
		{	
			$table->integer('draft_id')->unsigned();
			$table->foreign('draft_id')->references('id')->on('drafts')->onDelete('cascade');
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('team_name');
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
		Schema::drop('draft_user');
        Schema::drop('drafts');
		
	}

}

