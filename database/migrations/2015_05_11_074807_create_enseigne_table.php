<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseigneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseigne', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer('teacher_id')->unsigned();
			$table->integer('learner_id')->unsigned();
			$table->timestamps();
			$table->unique( array('teacher_id', 'learner_id') );
		});

		// Schema::table('enseigne', function(Blueprint $table)
		// {

  //           $table->foreign('teacher_id')->references('id')->on('users');
  //           $table->foreign('learner_id')->references('id')->on('users');
		// });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseigne');
	}

}
