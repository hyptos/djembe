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
		Schema::create('questionnaireExo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('questionnaire_id')->unsigned();
			$table->integer('exercice_id')->unsigned();
			$table->timestamps();
		});

		// Schema::table('questionnaireExo', function(Blueprint $table)
		// {
  //           $table->foreign('questionnaire_id')->references('id')->on('questionnaire');
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
		Schema::drop('questionnaireExo');
	}

}
