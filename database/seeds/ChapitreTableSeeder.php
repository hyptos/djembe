<?php

# database/seeds/ChapitreTableSeeder.php

use App\Models\Chapitre;
use Illuminate\Database\Seeder;

class ChapitreTableSeeder extends Seeder
{
    public function run()
    {

        /******
            Cours de solfège 
        *******/
        Chapitre::create([ // id 1
            'no' => '1',
            'titre' => 'Les sons',
            'contenu' => 'Dans la vie de tous les jours, il y a plein de
                        sons différents.<br/>
                        Amusons nous à en écouter et différencier quelques un.',
            'cours_id' => 1,
            'questionnaire_id' => 1,
        ]);

        Chapitre::create([ // id 2
            'no' => '2',
            'titre' => 'Les notes',
            'contenu' => 'En musique, nous différençons 7 types de sons
                        que nous nommons des notes.<br/> Il s\'agit de :
                        Do Ré Mi Fa Sol La et Si.<br/>
                        Amusons nous avec.',
            'cours_id' => 1,
            'questionnaire_id' => 2,
        ]);

        Chapitre::create([ // id 3
            'no' => '3',
            'titre' => 'Les suites de notes',
            'contenu' => 'Plus que des sons, la musique se compose à partir 
                          de plusieurs notes jouées ensemble ou les unes après
                          les autres.<br/>
                          Amusons nous à rejouer des suites de notes',
            'cours_id' => 1,
            'questionnaire_id' => 3,
        ]);

        Chapitre::create([ // id 4
            'no' => '1',
            'titre' => 'Lire et Ecrire la Musique - La portée',
            'contenu' => 'Pour pouvoir partager la musique
                            aux gens qui nous entourent nous
                            écrivons les notes sur ce que l\'on
                            appelle une portée.<br/>

                          <img src="/images/portee.png" alt="Portee" />',
            'cours_id' => 2,
            'questionnaire_id' => null,
        ]);

        Chapitre::create([ // id 5
            'no' => '2',
            'titre' => 'Lire et Ecrire la Musique - Les notes',
            'contenu' => 'Sur une portée une note est représentée
                        par un rond, appellé "tête", qui peut être
                        accompagné par un trait, appellé "queue".<br/>

                        <img src="/images/note.png" alt="Note" /><br/>

                        C\'est en posant plusieurs notes les unes après les
                        autres sur la portée que nous obtenons ce que l\'on 
                        appelle une partition.<br/>

                        <img src="/images/partition.png" alt="Partition" />',
            'cours_id' => 2,
            'questionnaire_id' => null,
        ]);

        Chapitre::create([ // id 6
            'no' => '3',
            'titre' => 'Lire et Ecrire la Musique - La clef de Sol',
            'contenu' => 'Pour savoir où doit être placée une note, nous
                            utilisons ce que l\'on appelle une Clef de Sol.<br/>

                            <img src="/images/cleDeSol.jpg" alt="clef de sol" /><br/>

                            Celle ci est placée au début de la portée et indique
                            sur quelle ligne de la portée est placé le sol.<br/>

                            Puis en suivant le code : Do Ré Mi Fa Sol La Si Do,
                            nous pouvons savoir où écrire les autres notes.<br/>

                            <img src="/images/note_repere.png" alt="note_repere" /><br/>

                            Amusons nous maintenant à placer des notes sur une portée.',
            'cours_id' => 2,
            'questionnaire_id' => 4,
        ]);



        /******
            Cours d'histoire de la Musique 
        *******/
         Chapitre::create([ // id 7
            'no' => '1',
            'titre' => 'Au commencement...',
            'contenu' => 'Comme il n\'existait aucun moyen d\'enregistrer ni d\'écrire la musique, on ne sait pas depuis combien de temps elle existe.

                        Au début, la musique des hommes qui vivaient sur Terre à ces époques lointaines n\'était pas sûrement semblable à la nôtre.
                        Les mélodies qu\'ils inventaient traduisaient des sentiments, des émotions. Le rythme leur donnait vie.
                        La danse est la musique du corps et ils frappaient des mains, dansaient et martelaient le sol avec les pieds pour accompagner leur musique.
                        Leurs danses consistaient entièrement en mouvements du corps et des bras, lents ou endiablés, doux ou violents, selon le sentiment exprimé.
                        Ils utilisaient la voix.',
            'cours_id' => 4,
            'questionnaire_id' => 5,
         ]);
    }
}
