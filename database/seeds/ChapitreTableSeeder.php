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
                        sons différents : <br/>

                        <audio id="accordeon" src="/son/accordeon.mp3" preload="auto"></audio>
                        <audio id="bird" src="/son/bird.mp3" preload="auto"></audio>
                        <audio id="cat" src="/son/cat.mp3" preload="auto"></audio>
                        <audio id="dog" src="/son/dog.mp3" preload="auto"></audio>
                        <audio id="piano" src="/son/piano_sol.mp3" preload="auto"></audio>
                        <audio id="french_cor" src="/son/french_cor.mp3" preload="auto"></audio>
                        <audio id="grelots" src="/son/grelots.mp3" preload="auto"></audio>
                        <audio id="djembe" src="/son/djembe.mp3" preload="auto"></audio>

                        <audio id="guitar" src="/son/guitar.mp3" preload="auto"></audio>
                        <audio id="ocarina" src="/son/ocarina.mp3" preload="auto"></audio>
                        <audio id="piccolo" src="/son/piccolo.mp3" preload="auto"></audio>
                        <audio id="shaker" src="/son/shaker.mp3" preload="auto"></audio>
                        <audio id="sneeze" src="/son/sneeze.mp3" preload="auto"></audio>
                        <audio id="violon" src="/son/violon.mp3" preload="auto"></audio>
                        <audio id="whisle" src="/son/whisle.mp3" preload="auto"></audio>
                        <audio id="saxophone" src="/son/sexy_saxo.MP3" preload="auto"></audio>

                        <button id="find" class="btn btn-default btn-lg son" note="djembe">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="dog">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="accordeon">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="piano">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button><br/>
                        <button id="find" class="btn btn-default btn-lg son" note="sneeze">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="saxophone">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="grelots">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="cat">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button><br/>
                        <button id="find" class="btn btn-default btn-lg son" note="piccolo">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="guitar">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="whisle">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="violon">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button><br/>
                        <button id="find" class="btn btn-default btn-lg son" note="french_cor">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="bird">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="shaker">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button>
                        <button id="find" class="btn btn-default btn-lg son" note="ocarina">
                            <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                        </button><br/>

                        <script type="text/javascript">
                        $(\'.son\').on(\'click\',function(e){
                            openAndPlay($(e.target).attr(\'note\'));
                        });
                        </script>
                        ',
            'cours_id' => 1,
            'questionnaire_id' => null,
        ]);

        Chapitre::create([ // id 2
            'no' => '2',
            'titre' => 'Les notes',
            'contenu' => 'En musique, nous différençons 7 types de sons
                        que nous nommons des notes.<br/>
                        Il s\'agit de :<br/>


                        <audio id="do" src="/son/piano_do.mp3" preload="auto"></audio>
                        <audio id="re" src="/son/piano_re.mp3" preload="auto"></audio>
                        <audio id="mi" src="/son/piano_mi.mp3" preload="auto"></audio>
                        <audio id="fa" src="/son/piano_fa.mp3" preload="auto"></audio>
                        <audio id="sol" src="/son/piano_sol.mp3" preload="auto"></audio>
                        <audio id="la" src="/son/piano_la.mp3" preload="auto"></audio>
                        <audio id="si" src="/son/piano_si.mp3" preload="auto"></audio>

                        <button class="btn rep">do</button>
                        <button class="btn rep">re</button>
                        <button class="btn rep">mi</button>
                        <button class="btn rep">fa</button>
                        <button class="btn rep">sol</button>
                        <button class="btn rep">la</button>
                        et
                        <button class="btn rep">si</button>

                        <script type="text/javascript">
                        $(function(){
                            changeColorButton(notes);
                        });
                        $(\'.rep\').on(\'click\',function(e){
                            openAndPlay(e.target.innerHTML);
                        });
                        </script>

                        <br/>Amusons nous maintenant à les différencier et les reconnaîtres.',
            'cours_id' => 1,
            'questionnaire_id' => 1,
        ]);

        Chapitre::create([ // id 3
            'no' => '3',
            'titre' => 'Les suites de notes',
            'contenu' => 'Plus que des sons, la musique se compose à partir
                          de plusieurs notes jouées ensemble ou les unes après
                          les autres.<br/>
                          Amusons nous à rejouer des suites de notes',
            'cours_id' => 1,
            'questionnaire_id' => 2,
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
                            sur quelle ligne de la portée est placé la note Sol.<br/>

                            Puis en suivant le code : Do Ré Mi Fa Sol La Si Do,
                            nous pouvons savoir où écrire les autres notes.<br/>

                            <img src="/images/note_repere.png" alt="note_repere" /><br/>

                            Amusons nous maintenant à placer des notes sur une portée.',
            'cours_id' => 2,
            'questionnaire_id' => 3,
        ]);

        Chapitre::create([ // id 7
            'no' => '4',
            'titre' => 'Le rythme dans la peau',
            'contenu' => '
est-ce que tu as le rythme dans la peau ?
<audio id="tick" src="/son/tick.wav" preload="auto"></audio>
<div id="metronome"><div id="metronome_container"></div></div>
<a href="#" class="btn btn-default" id="stop">stop</a>
            ',
            'cours_id' => 2,
            'questionnaire_id' => 3,
        ]);



        /******
            Cours d'histoire de la Musique
        *******/
         Chapitre::create([ // id 8
            'no' => '1',
            'titre' => 'Au commencement...',
            'contenu' => 'Comme il n\'existait aucun moyen d\'enregistrer ni d\'écrire la musique, on ne sait pas depuis combien de temps elle existe.

                        Au début, la musique des hommes qui vivaient sur Terre à ces époques lointaines n\'était pas sûrement semblable à la nôtre.
                        Les mélodies qu\'ils inventaient traduisaient des sentiments, des émotions. Le rythme leur donnait vie.
                        La danse est la musique du corps et ils frappaient des mains, dansaient et martelaient le sol avec les pieds pour accompagner leur musique.
                        Leurs danses consistaient entièrement en mouvements du corps et des bras, lents ou endiablés, doux ou violents, selon le sentiment exprimé.
                        Ils utilisaient la voix.',
            'cours_id' => 4,
            'questionnaire_id' => 4,
         ]);
    }
}
