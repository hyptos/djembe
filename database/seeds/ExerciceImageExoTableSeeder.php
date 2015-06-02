<?php

# database/seeds/ExerciceImageExoTableSeeder.php

use App\Models\ExerciceImageExo;
use Illuminate\Database\Seeder;

class ExerciceImageExoTableSeeder extends Seeder
{
    public function run()
    {
        //Exercice Reconnaissance Son
        ExerciceImageExo::create([
            'exercice_id' => 1,
            'imageExo_id' => 1
        ]);

        //Exercice Reconnaissance Suite de Sons
        ExerciceImageExo::create([
            'exercice_id' => 2,
            'imageExo_id' => 2
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 3,
            'imageExo_id' => 2
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 4,
            'imageExo_id' => 2
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 5,
            'imageExo_id' => 2
        ]);

        // Exercice Lecture Notes
        ExerciceImageExo::create([
            'exercice_id' => 6,
            'imageExo_id' => 3
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 7,
            'imageExo_id' => 3
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 8,
            'imageExo_id' => 3
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 9,
            'imageExo_id' => 3
        ]);

        ExerciceImageExo::create([
            'exercice_id' => 10,
            'imageExo_id' => 3
        ]);
    }
}