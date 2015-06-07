<?php

# database/seeds/QuestionnaireTableSeeder.php

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    public function run()
    {
        Questionnaire::create([ // id 1 : une note
            'nbExos' => 1,
            'chapitre_id' => 2,
            'cours_id' => 1,
        ]);

        Questionnaire::create([ // id 2 : suite de notes
            'nbExos' => 1,
            'chapitre_id' => 3,
            'cours_id' => 1,
        ]);

        Questionnaire::create([ // id 3 : Ecrire sur un Partition
            'nbExos' => 1,
            'chapitre_id' => 6,
            'cours_id' => 2,
        ]);
        
        Questionnaire::create([ // id 4 : texte à trou
            'nbExos' => 1,
            'chapitre_id' => 7,
            'cours_id' => 4,
        ]);
    }
}