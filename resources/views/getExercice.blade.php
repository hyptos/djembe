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
<style>
/* CSS */
.cf:before,
.cf:after {
  content:"";
  display:table;
}
.cf:after {
  clear:both;
}
.droite {
  float:right;
}
 
.oModal {
  position: fixed;
  z-index: 99999;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.8);
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
 
.oModal:target {
  opacity:1;
  pointer-events: auto;
}
 
.oModal:target > div {
  margin: 10% auto;
  transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
 
.oModal > div {
  max-width: 600px;
  position: relative;
  margin: 1% auto;
  padding: 8px 8px 8px 8px;
  border-radius: 5px;
  background: #eee;
  transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
 
.oModal > div header,.oModal > div footer {
  border-bottom: 1px solid #e7e7e7;
  border-radius: 5px 5px 0 0;
}
.oModal .footer {
  border:none;
  border-top: 1px solid #e7e7e7;
  border-radius: 0 0 5px 5px;
}
 
.oModal > div h2 {
  margin:0;
}
 
.oModal > div .btn {
  float:right;
}
 
.oModal > div section,.oModal > div > header, .oModal > div > footer {
  padding:15px;
}
</style>
 
	<div id="oModal" class="oModal">
	  <div>
		<header>
		  <a href="#fermer" title="Fermer la fenetre" class="droite"><img src='/images/close.png' width='25'/></a>
		   <h2>Relis ton cours</h2>
		 </header>
		 <section>
		  <p>Ton cours est ici. </p>
		 <section>
		 <footer class="cf">
		  <a href="#fermer" class="btn droite" title="Fermer la fenetre">Fermer la fenetre</a>
		 </footer>
	  </div>
	</div>

	<table>
		<tr>
			<td><img src='/images/DjembeMascotte.png' style='max-width: 200px;' /></td>
			<td><div class='arrow_box'><br/>Tu as besoin de revoir ton cours ? <a href="#oModal" id="indice" class="btn btn-default">C'est ici !</a><br/><br/></div></td>
		</tr>
	</table>
    {!!html_entity_decode($exercice->ressource)!!}

    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.4/d3.min.js"></script>

    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="nbResponses" name="nbResponses" value="{{ $exercice->nbReponses }}">
    <input type="hidden" id="timeAvg" name="timeAvg" value="60">
    <input type="hidden" id="idUser" name="idUser" value="{{ Auth::user()->id }}">
    <input type="hidden" id="idExercice" name="idExercice" value="{{ $exercice->id }}">
    <input type="hidden" id="idCours" name="idCours" value="{{ $exercice->cours_id }}">
    </script>
    <script type="text/javascript" src="{{ $exercice->script }}"></script>
    <script type="text/javascript">
    $(function(){
        $('.exercice').hide().show(1000);
    });
    </script>
</div>
@stop

@include('footer')