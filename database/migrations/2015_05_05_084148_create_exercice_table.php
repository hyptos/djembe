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
		Schema::create('exercices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->integer('difficulte');
			$table->integer('temps_moyen');
			$table->integer('nbReponses');
			$table->integer('imageexo_id')->unsigned();
			$table->integer('exo_continue_id')->unsigned();
			$table->integer('exo_continue_difficult_id')->unsigned();
			$table->integer('exo_redo_simple_id')->unsigned();
			$table->integer('exo_review_basics_id')->unsigned();
			$table->timestamps();
			$table->unique( array('type', 'difficulte') );
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
		Schema::drop('exercices');
	}

}
