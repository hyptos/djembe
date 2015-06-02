<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireExoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaire_exos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('questionnaire_id')->unsigned();
			$table->integer('exercice_id')->unsigned();
			$table->timestamps();
			$table->unique( array('questionnaire_id', 'exercice_id') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questionnaire_exos');
	}

}
