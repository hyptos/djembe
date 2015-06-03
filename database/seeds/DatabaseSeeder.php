<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
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

        $this->call('QuestionnaireExoTableSeeder');
        $this->command->info('QuestionnaireExo table seeded!');

        $this->call('ExerciceTableSeeder');
        $this->command->info('Exercice table seeded!');

        $this->call('NextExerciceTableSeeder');
        $this->command->info('NextExercice table seeded!');

        $this->call('ImageExoTableSeeder');
        $this->command->info('ImageExo table seeded!');

        $this->call('ExerciceImageExoTableSeeder');
        $this->command->info('ExerciceImageExo table seeded!');

        $this->call('EnseigneTableSeeder');
        $this->command->info('Enseigne table seeded!');

        $this->call('ForumTableSeeder');
        $this->command->info('Forum table seeded!');

        $this->call('WikiTableSeeder');
        $this->command->info('Wiki table seeded!');
    }
}
