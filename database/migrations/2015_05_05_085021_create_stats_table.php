<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('reussite');
			$table->integer('temps');
			$table->integer('avancement');
			$table->integer('cours_id')->unsigned();;
			$table->integer('user_id')->unsigned();;
 			$table->timestamps();
		});

		// Schema::table('stats', function(Blueprint $table)
		// {
  //           $table->foreign('cours_id')->references('id')->on('cours');
  //           $table->foreign('user_id')->references('id')->on('user');
		// });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stats');
	}

}
