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
		Schema::create('enseignes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('teacher_id')->unsigned();
			$table->integer('learner_id')->unsigned();
			$table->timestamps();
			$table->unique( array('teacher_id', 'learner_id') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseignes');
	}

}
