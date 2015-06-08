<?php

# database/seeds/NextExerciceTableSeeder.php

use App\Models\NextExercice;
use Illuminate\Database\Seeder;

class NextExerciceTableSeeder extends Seeder
{
    public function run()
    {
        // Exercices Reconnaissance son
        //Difficulté 1
        NextExercice::create([
            'exercice_id' => 1,
            'exo_continue_id' => 3,
            'exo_continue_difficult_id' => 1,
            'exo_redo_simple_id' => 1,
            'exo_review_basics_id' => 1
        ]);

        //Difficulté 2
        NextExercice::create([
            'exercice_id' => 2,
            'exo_continue_id' => 3,
            'exo_continue_difficult_id' => 2,
            'exo_redo_simple_id' => 1,
            'exo_review_basics_id' => 2
        ]);

        // Exercices Reconnaissance suite sons
        // Difficulté 1
        NextExercice::create([
            'exercice_id' => 3,
            'exo_continue_id' => 4,
            'exo_continue_difficult_id' => 4,
            'exo_redo_simple_id' => 3,
            'exo_review_basics_id' => 3
        ]);

        // Difficulté 2
        NextExercice::create([
            'exercice_id' => 4,
            'exo_continue_id' => 4,
            'exo_continue_difficult_id' => 5,
            'exo_redo_simple_id' => 3,
            'exo_review_basics_id' => 3
        ]);

        // Difficulté 3
        NextExercice::create([
            'exercice_id' => 5,
            'exo_continue_id' => 4,
            'exo_continue_difficult_id' => 6,
            'exo_redo_simple_id' => 4,
            'exo_review_basics_id' => 3
        ]);

        // Difficulté 4
        NextExercice::create([
            'exercice_id' => 6,
            'exo_continue_id' => 4,
            'exo_continue_difficult_id' => 6,
            'exo_redo_simple_id' => 5,
            'exo_review_basics_id' => 3
        ]);


        // Exercices Lecture de Notes
        //Difficulté 1
        NextExercice::create([
            'exercice_id' => 7,
            'exo_continue_id' => 7,
            'exo_continue_difficult_id' => 8,
            'exo_redo_simple_id' => 7,
            'exo_review_basics_id' => 4
        ]);

        //Difficulté 2
        NextExercice::create([
            'exercice_id' => 8,
            'exo_continue_id' => 7,
            'exo_continue_difficult_id' => 9,
            'exo_redo_simple_id' => 7,
            'exo_review_basics_id' => 4
        ]);

        //Difficulté 3
        NextExercice::create([
            'exercice_id' => 9,
            'exo_continue_id' => 7,
            'exo_continue_difficult_id' => 10,
            'exo_redo_simple_id' => 8,
            'exo_review_basics_id' => 4
        ]);

        //Difficulté 4
        NextExercice::create([
            'exercice_id' => 10,
            'exo_continue_id' => 7,
            'exo_continue_difficult_id' => 11,
            'exo_redo_simple_id' => 9,
            'exo_review_basics_id' => 4
        ]);

        //Difficulté 5
        NextExercice::create([
            'exercice_id' => 11,
            'exo_continue_id' => 7,
            'exo_continue_difficult_id' => 11,
            'exo_redo_simple_id' => 10,
            'exo_review_basics_id' => 4
        ]);

        //Texte à trous
        NextExercice::create([
            'exercice_id' => 12,
            'exo_continue_id' => 11,
            'exo_continue_difficult_id' => 12,
            'exo_redo_simple_id' => 12,
            'exo_review_basics_id' => 11
        ]);
    }
}