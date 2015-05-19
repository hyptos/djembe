<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');
		
		$this->call('StatsTableSeeder');
		$this->command->info('Stats table seeded!');
		
		$this->call('CoursTableSeeder');
		$this->command->info('Cours table seeded!');
		
		$this->call('ChapitreTableSeeder');
		$this->command->info('Chapitre table seeded!');
		
		$this->call('QuestionnaireTableSeeder');
		$this->command->info('Questionnaire table seeded!');
	}
}
