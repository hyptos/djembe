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
    <script type="text/javascript" src="/djembe/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="/djembe/js/question.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')

<div id="parti" class="container">
  <h2>Un petit quizz pour commencer:</h2>
    <div class="form-group">
      <p>Afin de mieux te connaitre, nous allons te poser des questions sur la musique, dès que tu es prêt, clique sur C'est parti</p>
    </div>
    <button id="parti_b" type="button">C'est parti</button>
</div>

<div id="solfege1" class="container">
  <h2>Question 1</h2>
    <div class="form-group">
      <p>attend avis antoine²</p>
    </div>
    <button id="solfege1_b" class="btn btn-default">Suivant</button>
</div>
<div id="solfege2" class="container">
  <h2>Question 2</h2>
    <div class="form-group">
      <p>attend avis antoine²</p>
    </div>
    <button id="solfege2_b" class="btn btn-default">Suivant</button>
</div>

<div id="instru1" class="container">
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
    <button id="instru1_b" class="btn btn-default">Suivant</button>
</div>

<div id="instru2" class="container">
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
    <button id="instru2_b" class="btn btn-default">Suivant</button>
</div>
<div id="instru3" class="container">
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
    <button id="instru3_b" class="btn btn-default">Suivant</button>
</div>

<div id="hist1" class="container">
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
    <button id="hist1_b" class="btn btn-default">Suivant</button>
</div>

<div id="hist2" class="container">
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
    <button id="hist2_b" class="btn btn-default">Suivant</button>
</div>

<div id="hist3" class="container">
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
    <button id="hist3_b" class="btn btn-default">Suivant</button>
</div>

<div id="termine" class="container">
  <h2>Finiii^^</h2>
    <div class="form-group">
      <p>c'est fini :)</p>
    </div>
    <div id="res"></div>
    <button id="termine" class="btn btn-default">Accueil</button>
</div>

@stop
