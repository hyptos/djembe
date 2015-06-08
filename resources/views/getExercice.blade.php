@extends('layouts.master')

@section('title', 'Exercice')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="/js/utility.js"></script>
    <script src="/js/d3pie.min.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')
<div class="exercice">
 
	<div id="oModal" class="oModal">
	  <div>
		<header>
		  <a href="#fermer" title="Fermer la fenetre" class="droite"><img src='/images/close.png' width='25'/></a>
		   <h2>Relis ton cours</h2>
		 </header>
		 <section>
		  <p id='contenuCours'>Ton cours est ici. </p>
		 <section>
		 <footer class="cf">
		  <a href="#fermer" class="btn droite" title="Fermer la fenetre">Fermer la fenetre</a>
		 </footer>
	  </div>
	</div>

	<div class='col-md-2'>
		<img src='/images/DjembeMascotte.png' style='max-width: 200px;' />
	</div>
	<div class='col-md-4'>
		<div class='arrow_box'><br/>Tu as besoin de revoir ton cours ? <a href="#oModal" id="indice" class="btn btn-default">C'est ici !</a><br/><br/></div>
	</div>
			
		{!!html_entity_decode($exercice->ressource)!!}

    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.4/d3.min.js"></script>

    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="nbResponses" name="nbResponses" value="{{ $exercice->nbReponses }}">
    <input type="hidden" id="timeAvg" name="timeAvg" value="60">
    <input type="hidden" id="idUser" name="idUser" value="{{ Auth::user()->id }}">
    <input type="hidden" id="idExercice" name="idExercice" value="{{ $exercice->id }}">
    <input type="hidden" id="idCours" name="idCours" value="">
    </script>
    <script type="text/javascript" src="{{ $exercice->script }}"></script>
    <script type="text/javascript">
    $(function(){
        $('.exercice').hide().show(1000);
        getChapitre().done(function(response){
            $('#idCours').val(response.cours_id);
			$('#contenuCours').html(response.contenu);
        });
    });
    </script>
</div>
@stop

@include('footer')
