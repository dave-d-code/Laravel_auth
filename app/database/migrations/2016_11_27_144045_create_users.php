<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('email')->unique();
			$newtable->string('username', 100)->unique();
			$newtable->string('password', 50);
			$newtable->string('remember_token',100);
			$newtable->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$newtable->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
