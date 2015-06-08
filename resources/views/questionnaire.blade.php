@extends('layouts.master')

@section('title', 'Question')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="/js/question.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')

<div class="form-bottom">
<form role="form" action="addCon" method="post" class="registration-form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="parti" class="form-group">
      <h2>Un petit quizz pour commencer:</h2>
        <div class="form-group">
          <p>Afin de mieux te connaitre, nous allons te poser des questions sur la musique, dès que tu es prêt, clique sur C'est parti</p>
        </div>
        <a class="btn btn-warning btn-lg" id="parti_b" href="#">C'est parti</a>
    </div>

    <div id="solfege1" class="form-group">
      <h2>Question 1</h2>
        <div class="form-group">
          <p>Quelle est cette note ?</p>
                  <img src="/images/re.png">
                  <div class="radio">
                    <label><input type="radio" name="note1" value="mi">mi</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="note1" value="re">re</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="note1" value="do">do</label>
                  </div>
        </div>
        <a class="btn btn-warning btn-lg" id="solfege1_b" href="#">Suivant</a>
    </div>
    <div id="solfege2" class="form-group">
      <h2>Question 2</h2>
        <div class="form-group">
           <p>Quelle est la durée de cette note ?</p>
                  <img src="/images/croche.png">
                  <div class="radio">
                    <label><input type="radio" name="note2" value="1">1 temps</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="note2" value="1_2">1/2 temps</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="note2" value="1_4">1/4 temps</label>
                  </div>
        </div>
        <a class="btn btn-warning btn-lg" id="solfege2_b" href="#">Suivant</a>
    </div>

    <div id="instru1" class="form-group">
      <h2>Question 3</h2>
        <div class="form-group">
          <p>De quelle famille d'instruments appartient la guitare?</p>
                  <div class="radio">
                    <label><input type="radio" name="guitare" value="vent">Vent</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="guitare" value="percussion">Percussion</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="guitare" value="corde">Corde</label>
                  </div>
        </div>
         <a class="btn btn-warning btn-lg" id="instru1_b" href="#">Suivant</a>
    </div>

    <div id="instru2" class="form-group">
        <h2>Question 4</h2>
        <div class="form-group">
            <p>De quelle famille d'instruments appartient la flûte?</p>
            <div class="radio">
              <label><input type="radio" name="flute" value="vent">Vent</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="flute" value="percussion">Percussion</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="flute" value="corde">Corde</label>
            </div>
        </div>
        <a class="btn btn-warning btn-lg" id="instru2_b" href="#">Suivant</a>
    </div>
    <div id="instru3" class="form-group">
      <h2>Question 5</h2>
        <div class="form-group">
          <p>De quelle famille d'instruments appartient le piano?</p>
            <div class="radio">
              <label><input type="radio" name="piano" value="vent">Vent</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="piano" value="percussion">Percussion</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="piano" value="corde">Corde</label>
            </div>
        </div>
        <a class="btn btn-warning btn-lg" id="instru3_b" href="#">Suivant</a>
    </div>

    <div id="hist1" class="form-group">
      <h2>Question 6</h2>
        <div class="form-group">
          <p>Quel musique a été composée par Mozart?</p>
            <div class="radio">
              <label><input type="radio" name="mozart" value="miss">Miss Parfaite</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="mozart"value="requiem">Requiem</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="mozart" value="lettre">Lettre à Elise</label>
            </div>
        </div>
        <a class="btn btn-warning btn-lg" id="hist1_b" href="#">Suivant</a>
    </div>

    <div id="hist2" class="form-group">
      <h2>Question 7</h2>
        <div class="form-group">
          <p>Quel musique a été composée par Beethovven?</p>
                  <div class="radio">
                    <label><input type="radio" name="beethovven" value="miss">Miss Parfaite</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="beethovven" value="requiem">Requiem</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="beethovven" value="lettre">Lettre à Elise</label>
                  </div>
        </div>
        <a class="btn btn-warning btn-lg" id="hist2_b" href="#">Suivant</a>
    </div>

    <div id="hist3" class="form-group">
      <h2>Question 8</h2>
        <div class="form-group">
          <p>Qui a chanté "Qui a le droit? "?</p>
                  <div class="radio">
                    <label><input type="radio" name="patrick" value="johnny">Johnny Halliday</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="patrick" value="bruel">Patrick Bruel</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="patrick" value="kendji">Kendji Girac</label>
                  </div>
        </div>
        <button type="submit" class="btn btn-warning btn-lg">Terminé</button>
    </div>


</form>
</div>

@stop
