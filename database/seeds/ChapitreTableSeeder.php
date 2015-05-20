<?php

# database/seeds/ChapitreTableSeeder.php

use App\Models\Chapitre;
use Illuminate\Database\Seeder;

class ChapitreTableSeeder extends Seeder
{
    public function run()
    {
        Chapitre::create([
            'noChapitre' => '1',
            'titreChapitre' => 'Les sons',
            'contenu' => 'Il existe différents sons en musique, 
                        peut être que tu les connais déjà : Do Ré Mi Fa Sol La Si.
                        Amusons nous à les écouter et les différencier.',
            'cours_id' => 1,
            'questionnaire_id' => 1,
        ]);

        Chapitre::create([
            'noChapitre' => '2',
            'titreChapitre' => 'Les suites de sons',
            'contenu' => 'Plus que des sons, la musique est composé de suite de sons.
                          Amusons nous à rejouer des suites de sons',
            'cours_id' => 1,
            'questionnaire_id' => 2,
        ]);

        Chapitre::create([
            'noChapitre' => '1',
            'titreChapitre' => 'Lire les notes',
            'contenu' => 'En musique les sons s\'appellent des notes.
                          Comme tu le sais il en existe plusieurs :
                          Do Ré Mi Fa Sol La Si.

                          Pour les lire et les écrire nous utilisons une portée

                          [img de portée]',
            'cours_id' => 2,
            'questionnaire_id' => NULL,
        ]);
    }
}