<?php

# database/seeds/ChapitreTableSeeder.php

use App\Models\Chapitre;
use Illuminate\Database\Seeder;

class ChapitreTableSeeder extends Seeder
{
    public function run()
    {
        Chapitre::create([
            'no' => '1',
            'titre' => 'Les sons',
            'contenu' => 'Il existe différents sons en musique,
                        peut être que tu les connais déjà : Do Ré Mi Fa Sol La Si.
                        Amusons nous à les écouter et les différencier.',
            'cours_id' => 1,
            'questionnaire_id' => 1,
        ]);

        Chapitre::create([
            'no' => '2',
            'titre' => 'Les suites de sons',
            'contenu' => 'Plus que des sons, la musique est composé de suite de sons.
                          Amusons nous à rejouer des suites de sons',
            'cours_id' => 1,
            'questionnaire_id' => 2,
        ]);

        Chapitre::create([
            'no' => '1',
            'titre' => 'Lire les notes',
            'contenu' => 'En musique les sons s\'appellent des notes.
                          Comme tu le sais il en existe plusieurs :
                          Do Ré Mi Fa Sol La Si.

                          Pour les lire et les écrire nous utilisons une portée

                          [img de portée]',
            'cours_id' => 2,
            'questionnaire_id' => NULL,
        ]);
         Chapitre::create([
            'no' => '1',
            'titre' => 'Au commencement...',
            'contenu' => 'Comme il n\'existait aucun moyen d\'enregistrer ni d\'écrire la musique, on ne sait pas depuis combien de temps elle existe.

                        Au début, la musique des hommes qui vivaient sur Terre à ces époques lointaines n\'était pas sûrement semblable à la nôtre.
                        Les mélodies qu\'ils inventaient traduisaient des sentiments, des émotions. Le rythme leur donnait vie.
                        La danse est la musique du corps et ils frappaient des mains, dansaient et martelaient le sol avec les pieds pour accompagner leur musique.
                        Leurs danses consistaient entièrement en mouvements du corps et des bras, lents ou endiablés, doux ou violents, selon le sentiment exprimé.
                        Ils utilisaient la voix.',
            'cours_id' => 3,
            'questionnaire_id' => 4,
        ]);
    }
}
