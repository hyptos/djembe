<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cours', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titre');
			$table->integer('difficulte');
			$table->string('type');
			$table->timestamps();
			$table->unique( array('titre', 'difficulte') );
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cours');
	}

}
