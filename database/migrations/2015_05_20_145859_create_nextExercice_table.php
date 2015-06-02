<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextExerciceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nextExercice', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercice_id')->unsigned();
			$table->integer('exo_continue_id')->unsigned();
			$table->integer('exo_continue_difficult_id')->unsigned();
			$table->integer('exo_redo_simple_id')->unsigned();
			$table->integer('exo_review_basics_id')->unsigned();
			$table->timestamps();
			$table->unique( array('exercice_id') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nextExercice');
	}

}
