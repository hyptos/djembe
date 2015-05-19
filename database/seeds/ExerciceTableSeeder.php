<?php

# database/seeds/ExerciceTableSeeder.php

use App\Models\Exercice;
use Illuminate\Database\Seeder;

class ExerciceTableSeeder extends Seeder
{
    public function run()
    {
        // Exercices de reconnaissance d'une note Do Ré Mi Fa Sol La Si
        Exercice::create([ // id : 1
            'type' => 'ReconnaitreNote',
            'difficulte' => 1,
            'temps_moyen' => 60,
            'nbReponses' => 1,
            'imageexo_id' => 1,
            'exo_continue_id' => 1,
            'exo_continue_difficult_id' => 1,
            'exo_redo_simple_id' => 1,
            'exo_review_basics_id' => 1,
        ]);


        // Exercices de reconnaissance d'une suite de notes
        Exercice::create([ // id : 2
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 1,
            'temps_moyen' => 60,
            'nbReponses' => 3,
            'imageexo_id' => 2,
            'exo_continue_id' => 3,
            'exo_continue_difficult_id' => 3,
            'exo_redo_simple_id' => 2,
            'exo_review_basics_id' => 2,
        ]);

        Exercice::create([ // id : 3
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 2,
            'temps_moyen' => 60,
            'nbReponses' => 5,
            'imageexo_id' => 2,
            'exo_continue_id' => 4,
            'exo_continue_difficult_id' => 5,
            'exo_redo_simple_id' => 2,
            'exo_review_basics_id' => 2,
        ]);

        Exercice::create([ // id : 4
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 3,
            'temps_moyen' => 60,
            'nbReponses' => 10,
            'imageexo_id' => 2,
            'exo_continue_id' => 5,
            'exo_continue_difficult_id' => 5,
            'exo_redo_simple_id' => 3,
            'exo_review_basics_id' => 2,
        ]);

        Exercice::create([ // id : 5
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 4,
            'temps_moyen' => 60,
            'nbReponses' => 10,
            'imageexo_id' => 2,
            'exo_continue_id' => 5,
            'exo_continue_difficult_id' => 5,
            'exo_redo_simple_id' => 4,
            'exo_review_basics_id' => 2,
        ]);


        // Exercices de lecture d'une portée
        Exercice::create([ // id : 6
            'type' => 'LirePartition',
            'difficulte' => 1,
            'temps_moyen' => 60,
            'nbReponses' => 1,
            'imageexo_id' => 3,
            'exo_continue_id' => 7,
            'exo_continue_difficult_id' => 7,
            'exo_redo_simple_id' => 6,
            'exo_review_basics_id' => 6,
        ]);

        Exercice::create([ // id : 7
            'type' => 'LirePartition',
            'difficulte' => 2,
            'temps_moyen' => 60,
            'nbReponses' => 3,
            'imageexo_id' => 3,
            'exo_continue_id' => 8,
            'exo_continue_difficult_id' => 8,
            'exo_redo_simple_id' => 6,
            'exo_review_basics_id' => 6,
        ]);

        Exercice::create([ // id : 8
            'type' => 'LirePartition',
            'difficulte' => 3,
            'temps_moyen' => 60,
            'nbReponses' => 6,
            'imageexo_id' => 3,
            'exo_continue_id' => 9,
            'exo_continue_difficult_id' => 10,
            'exo_redo_simple_id' => 7,
            'exo_review_basics_id' => 6,
        ]);

        Exercice::create([ // id : 9
            'type' => 'LirePartition',
            'difficulte' => 4,
            'temps_moyen' => 60,
            'nbReponses' => 10,
            'imageexo_id' => 3,
            'exo_continue_id' => 10,
            'exo_continue_difficult_id' => 10,
            'exo_redo_simple_id' => 8,
            'exo_review_basics_id' => 6,
        ]);

        Exercice::create([ // id : 10
            'type' => 'LirePartition',
            'difficulte' => 5,
            'temps_moyen' => 60,
            'nbReponses' => 15,
            'imageexo_id' => 3,
            'exo_continue_id' => 10,
            'exo_continue_difficult_id' => 10,
            'exo_redo_simple_id' => 10,
            'exo_review_basics_id' => 10,
        ]);
    }
}