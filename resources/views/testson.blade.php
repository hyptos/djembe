@extends('layouts.master')

@section('title', 'Son')

@section('content')

    <!-- affichage du lecteur -->
    <audio id="MonLecteur" autoplay>
    <source src="../son/do.mp3" type="audio/mp3" />
    Échec, la balise audio n'est pas reconnue par votre navigateur
    </audio>

    <button type="button" onclick="aud_play_pause()">Lecture do</button>

    <script>
    function aud_play_pause() {
      var MonLecteur = document.getElementById("MonLecteur");
      //if (MonLecteur.paused) {
        MonLecteur.play();
      //} else {
       // MonLecteur.pause();
     // }
    }
    </script>

@stop
