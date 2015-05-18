<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercice', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contenuATrou');
			$table->integer('difficulte');
			$table->string('resultat');
			$table->string('indice');
			$table->integer('imageexo_id')->unsigned();
			$table->timestamps();
		});

		// Schema::table('exercice', function(Blueprint $table)
		// {
  //           $table->foreign('imageexo_id')->references('id')->on('imageExo');
  //       });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exercice');
	}

}
