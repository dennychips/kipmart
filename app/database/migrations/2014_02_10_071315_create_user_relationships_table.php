<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRelationshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_relationships', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('followed_id');
			// $table->primary(['id', 'users_id']);
			// $table->foreign('users_id')->references('id')->on('users');
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
		Schema::drop('user_relationships');
	}

}
