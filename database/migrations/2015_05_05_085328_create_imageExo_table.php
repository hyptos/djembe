<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageExoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imageExo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url');
			$table->integer('exercice_id')->unsigned();
			$table->timestamps();
		});

		// Schema::table('imageExo', function(Blueprint $table)
		// {
  //           $table->foreign('exercice_id')->references('id')->on('exercice');
		// });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imageExo');
	}

}
