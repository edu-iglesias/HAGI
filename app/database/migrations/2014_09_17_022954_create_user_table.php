<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUserTable extends Migration {


	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email');
			$table->string('password')->nullable();
			$table->string('org_name')->nullable();
			$table->string('pref_id')->nullable();
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
