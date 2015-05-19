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
			$table->integer('noChapitre');
			$table->string('titreChapitre');
			$table->string('contenuEditable');
			$table->integer('questionnaire_id')->unsigned();
			$table->integer('cours_id')->unsigned();
			$table->timestamps();
		});

		// Schema::table('chapitre', function(Blueprint $table)
		// {
  //           $table->foreign('questionnaire_id')->references('id')->on('questionnaire');
  //           $table->foreign('cours_id')->references('id')->on('cours');
  //       });
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
