<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('nbExos');
			$table->integer('chapitre_id');
			$table->integer('cours_id');
			$table->timestamps();
			$table->unique( array('chapitre_id', 'cours_id') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('questionnaires');
	}

}
