<?php

# database/seeds/QuestionnaireTableSeeder.php

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    public function run()
    {
        Questionnaire::create([ // id 1 : une note sans les noms
            'nbExos' => 1,
            'chapitre_id' => 1,
            'cours_id' => 1,
        ]);

        Questionnaire::create([ // id 2  : une note avec les noms
            'nbExos' => 1,
            'chapitre_id' => 2,
            'cours_id' => 1,
        ]);

        Questionnaire::create([ // id 3 : suite de notes
            'nbExos' => 1,
            'chapitre_id' => 3,
            'cours_id' => 1,
        ]);
        
        Questionnaire::create([ // id 4 : texte à trou
            'nbExos' => 1,
            'chapitre_id' => 4,
            'cours_id' => 4,
        ]);
    }
}