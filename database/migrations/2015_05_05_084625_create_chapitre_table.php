<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapitreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chapitre', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('nbChapitre');
			$table->string('contenuEditable');
			$table->integer('questionnaire_id')->unsigned();
			$table->integer('cours_id')->unsigned();
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
		Schema::drop('chapitre');
	}

}
