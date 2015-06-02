<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciceImageExoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exerciceImageExo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercice_id')->unsigned();
			$table->integer('imageExo_id')->unsigned();
			$table->unique( array('exercice_id', 'imageExo_id') );
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
		Schema::drop('exerciceImageExo');
	}

}
