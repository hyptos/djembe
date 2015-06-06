<?php

# database/seeds/QuestionnaireExoTableSeeder.php

use App\Models\QuestionnaireExo;
use Illuminate\Database\Seeder;

class QuestionnaireExoTableSeeder extends Seeder
{
    public function run()
    {
        QuestionnaireExo::create([
            'questionnaire_id' => 1,
            'exercice_id' => 1,
        ]);

        QuestionnaireExo::create([
            'questionnaire_id' => 2,
            'exercice_id' => 2,
        ]);

        QuestionnaireExo::create([
            'questionnaire_id' => 3,
            'exercice_id' => 3,
        ]);
        
        QuestionnaireExo::create([
            'questionnaire_id' => 4,
            'exercice_id' => 12,
        ]);
    }
}