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
		Schema::create('chapitres', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('no');
			$table->string('titre');
			$table->string('contenu');
			$table->integer('questionnaire_id')->nullable();
			$table->integer('cours_id')->unsigned();
			$table->timestamps();
			$table->unique( array('no', 'cours_id') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chapitres');
	}

}
