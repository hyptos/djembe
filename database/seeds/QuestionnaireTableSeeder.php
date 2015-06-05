<?php

# database/seeds/QuestionnaireTableSeeder.php

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    public function run()
    {
        Questionnaire::create([
            'nbExos' => 1,
            'chapitre_id' => 1,
            'cours_id' => 1,
        ]);

        Questionnaire::create([
            'nbExos' => 1,
            'chapitre_id' => 2,
            'cours_id' => 1,
        ]);
        
        Questionnaire::create([
            'nbExos' => 1,
            'chapitre_id' => 4,
            'cours_id' => 4,
        ]);
    }
}