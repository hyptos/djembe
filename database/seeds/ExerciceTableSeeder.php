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
            'ressource' => '<div class="col-md-12" id="game">
                            <p id="message"></p>
                            <p>
                            <button id="find" class="btn btn-primary" note="si">Quel est cette note ?</button>
                            <br>
                            <br>

                            <input note="do" name="answer" type="radio">
                            <button class="btn btn-warning rep">do</button>
                            <input note="re" name="answer" type="radio">
                            <button class="btn btn-warning rep">re</button>
                            <input note="mi" name="answer" type="radio">
                            <button class="btn btn-warning rep">mi</button>
                            <input note="fa" name="answer" type="radio">
                            <button class="btn btn-warning rep">fa</button>
                            <input note="sol" name="answer" type="radio">
                            <button class="btn btn-warning rep">sol</button>
                            <input note="la" name="answer" type="radio">
                            <button class="btn btn-warning rep">la</button>
                            <input note="si" name="answer" type="radio">
                            <button class="btn btn-warning rep">si</button>
                            <audio id="do" src="/son/piano_do.mp3" preload="auto"></audio>
                            <audio id="re" src="/son/piano_re.mp3" preload="auto"></audio>
                            <audio id="mi" src="/son/piano_mi.mp3" preload="auto"></audio>
                            <audio id="fa" src="/son/piano_fa.mp3" preload="auto"></audio>
                            <audio id="sol" src="/son/piano_sol.mp3" preload="auto"></audio>
                            <audio id="la" src="/son/piano_la.mp3" preload="auto"></audio>
                            <audio id="si" src="/son/piano_si.mp3" preload="auto"></audio>
                    </p>
<a href="#" id="sendAnswers" class="btn btn-primary">J\'ai fini</a>
                    </div>',
            'script' => '/js/reconnaissance.js'
        ]);


        // Exercices de reconnaissance d'une suite de notes
        Exercice::create([ // id : 2
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 1,
            'ressource' => '<div class="row">
                                <div class="col-md-12">
                                    <div id="game" class="text-center">
                                        <div id="pieChart"></div>
                                        <button class="btn btn-primary btn-lg" id="beginGame">Jouer</button>
                                        <div id="message" class="alert"></div>
                                    </div>
                                </div>
                            </div>

                            <audio id="do" src="/son/piano_do.mp3" preload="auto"></audio>
                            <audio id="re" src="/son/piano_re.mp3" preload="auto"></audio>
                            <audio id="mi" src="/son/piano_mi.mp3" preload="auto"></audio>
                            <audio id="fa" src="/son/piano_fa.mp3" preload="auto"></audio>
                            <audio id="sol" src="/son/piano_sol.mp3" preload="auto"></audio>
                            <audio id="la" src="/son/piano_la.mp3" preload="auto"></audio>
                            <audio id="si" src="/son/piano_si.mp3" preload="auto"></audio>',
            'script' => '/js/pie.js',
            'temps_moyen' => 3,
            'nbReponses' => 3,
        ]);

        Exercice::create([ // id : 3
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 2,
            'temps_moyen' => 5,
            'nbReponses' => 5,
        ]);

        Exercice::create([ // id : 4
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 3,
            'temps_moyen' => 10,
            'nbReponses' => 10,
        ]);

        Exercice::create([ // id : 5
            'type' => 'ReconnaitreSuiteNotes',
            'difficulte' => 4,
            'temps_moyen' => 15,
            'nbReponses' => 10,
        ]);


        // Exercices de lecture d'une portée
        Exercice::create([ // id : 6
            'type' => 'LirePartition',
            'difficulte' => 1,
            'ressource' => '<link rel="stylesheet" href="/css/styleddpartition.css">
                            <script type="text/javascript" src="/js/interact.min.js"></script>
                            <div class="col-md-12" id="game">
                            <div id="message" class="alert"></div>
                            <div id="lesNotes">
                            <br/><br/>
                            <div id="zone0" class="dropzone b"></div>
                            <div id="zone1" class="dropzone nn"></div>
                            <div id="zone2" class="dropzone b"></div>
                            <div id="zone3" class="dropzone n"></div>
                            <div id="zone4" class="dropzone b"></div>
                            <div id="zone5" class="dropzone n"></div>
                            <div id="zone6" class="dropzone b"></div>
                            <div id="zone7" class="dropzone n"></div>
                            <div id="zone8" class="dropzone b"></div>
                            <div id="zone9" class="dropzone n" style="position: relative;">
                                <div style="position: absolute; top: -250px;"><img src="/images/cleDeSol.png"></div>
                            </div>
                            <div id="zone10" class="dropzone b"></div>
                            <div id="zone11" class="dropzone n"></div>
                            <div id="zone12" class="dropzone b"></div>
                            <div id="zone13" class="dropzone nn"></div>
                            <div id="zone14" class="dropzone b"></div>
                            <div id="zone15" class="dropzone nn"></div><br/><br/>
                            </div>
                            <button id="finish" class="btn btn-primary">J\'ai terminé !</button></div>',
            'script' => '/js/ddpartition.js',
            'temps_moyen' => 60,
            'nbReponses' => 1,
        ]);

        Exercice::create([ // id : 7
            'type' => 'LirePartition',
            'difficulte' => 2,
            'temps_moyen' => 60,
            'nbReponses' => 3,
        ]);

        Exercice::create([ // id : 8
            'type' => 'LirePartition',
            'difficulte' => 3,
            'temps_moyen' => 60,
            'nbReponses' => 6,
        ]);

        Exercice::create([ // id : 9
            'type' => 'LirePartition',
            'difficulte' => 4,
            'temps_moyen' => 60,
            'nbReponses' => 10,
        ]);

        Exercice::create([ // id : 10
            'type' => 'LirePartition',
            'difficulte' => 5,
            'temps_moyen' => 60,
            'nbReponses' => 15,
        ]);
        Exercice::create([ // id : 11
                'type' => 'TextATrou',
                'difficulte' => 1,
                'ressource' => '<div class="col-md-12" id="game">
                                <p class="listedesmots"><u>mots à utiliser :</u>
                                 doux,Terre,rythme,mains,sentiments,mélodies,voix,danses
                                </p>
                                <p> </p>

                                <form role="form" method="post" class="registration-form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <p>
                                    Comme il n\'existait aucun moyen d\'enregistrer ni d\'écrire la musique, on ne sait pas depuis combien de temps elle existe.

                                	Au début, la musique des hommes qui vivaient sur <input id="a" size="8" type="text" name="a"> à ces époques lointaines n\'était pas sûrement semblable à la nôtre.
                                	Les <input id="b" size="8" type="text" name="b"> qu\'ils inventaient traduisaient des <input id="c" size="8" type="text" name="c">, des émotions.
                                	Le <input id="d" size="8" type="text" name="d"> leur donnait vie.
                                	La danse est la musique du corps et ils frappaient des <input id="e" size="8" type="text" name="e">, dansaient et martelaient le sol avec les pieds pour accompagner leur musique.
                                	Leurs <input id="f" size="8" type="text" name="f"> consistaient entièrement en mouvements du corps et des bras, lents ou endiablés, <input id="g" size="8" type="text" name="g"> ou violents, selon le sentiment exprimé.
                                	Ils utilisaient la <input id="h" size="8" type="text" name="h">.
                                    </p>
                                    <p> </p>
                                    <p> </p>
                                    <p class="rep">
                                	<button id="finish" type="button">Vérifier les réponses</button>
                                    <input type="reset" name="effacer" value="Tout effacer !">
                                    <p>
                                </form>
                                </div>',
                            'script' => '/js/textatrou.js',
                'temps_moyen' => 60,
                'nbReponses' => 15,
            ]);
    }
}
