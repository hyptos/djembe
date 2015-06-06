<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnaissanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connaissance', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unique();
			$table->integer('solfege_moyen');
			$table->integer('instruments_moyen');
			$table->integer('histoire_moyen');
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
		Schema::drop('connaissance');
	}

}
