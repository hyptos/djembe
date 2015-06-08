@extends('layouts.master')

@section('title', 'Mon compte')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="/js/utility.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/signup.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')
@section('content')
@section('content')

    <div class="row">
        <div class="col-lg-4">
            <h1><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp; {{$user->name}}</h1>
        </div>
        <div class="col-lg-8">
            <p>{{$user->email}}</p>
             <p>{{ $user->teach == 1 ? 'Prof' : 'Je suis un apprenant' }}</p>
        </div>
    </div>




	@if ($user->teach == 1)
		<h3><span class="glyphicon glyphicon-stats" aria-hidden="true">&nbsp; Liste des élèves</h3>


		<table class="table">
		<tr>
			<th>
				Nom
			</th>
			<th>
				Exercice
			</th>
			<th>
				Moyenne
			</th>
		</tr>
    	@foreach ($learners as $v)
	    	@foreach ($v->stats as $s)
    		<tr>
    			<td><a href="/user/{{$v->id}}"> {{$v->name}}</a></td>
	    		<td>
	    			{{$s->exercice_id}}
	    		</td>
	    		<td>
	    			{{$s->reussite}}
	    		</td>
			</tr>
			@endforeach
		@endforeach
		</table>
	@endif

<h3><span class="glyphicon glyphicon-stats" aria-hidden="true">&nbsp; Mes statistiques</h3>
<hr>

<?php

function getMoyenne($user,$type){
	$result = array();
	foreach ($user->stats as $stat) {
	    if ($stat->cours->type == $type){
          $id = $stat->exercice_id;
          $val = 0;
          if (isset($result[$id])) {
             $result[$id][] = $stat->reussite;
          } else {
             $result[$id] = array($stat->reussite);
          }
      }
	}


	$total = array();
	foreach($result as $key => $id){
		$val = 0;
		foreach ($id as $nb => $reussite){
			$val += $reussite;
			$total[$key] = array($nb+1 => $val);
		}
	}

	return $total;
}

$totalS = getMoyenne($user,'solfege');
$totalI = getMoyenne($user,'instruments');
$totalH = getMoyenne($user,'histoire');

?>

<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li><a data-toggle="tab" href="#sectionA">Solfège</a></li>
        <li><a data-toggle="tab" href="#sectionB">Instruments</a></li>
        <li><a data-toggle="tab" href="#sectionC">Histoire</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>Solfège</h3>
            <div class="progress">
              <div id="barSolfege" class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
           @foreach ($totalS as $key => $value)
           		<p> <a href="/exercice/{{$key}}">Exercice n°{{$key}}</a>
           	@foreach ($value as $k => $v)
           		<span class="note" data="{{$key}}" >{{$v/$k}}</span></p>
           	@endforeach
           @endforeach


        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Instruments</h3>
            <div class="progress">
              <div id="barInstru" class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            @foreach ($totalI as $key => $value)
                    <p> <a href="/exercice/{{$key}}">Exercice n°{{$key}}</a>
                @foreach ($value as $k => $v)
                    <span class="note" data="{{$key}}" >{{$v/$k}}</span></p>
                @endforeach
            @endforeach


        </div>
        <div id="sectionC" class="tab-pane fade">
            <h3>Instruments</h3>
            <div class="progress">
              <div id="barHist" class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
           @foreach ($totalH as $key => $value)
           		<p> <a href="/exercice/{{$key}}">Exercice n°{{$key}}</a>
           	@foreach ($value as $k => $v)
           		<span class="note" data="{{$key}}" >{{$v/$k}}</span></p>
           	@endforeach
           @endforeach


        </div>
    </div>
</div>

<script type="text/javascript">
           	$(function() {
             		var notes = $('.note');
             		notes.each(function( index ) {
                        getFuzzyNote($( this ).text(), $( this ).attr('data'));
           		    });
             	});
             	getConnaissance().done(function(response){
             	    var res = response[0];
                    $('#barSolfege').css('width',res.solfege_moyen+'%');
                    $('#barInstru').css('width',res.instruments_moyen+'%');
                    $('#barHist').css('width',res.histoire_moyen+'%');
             	});
</script>

<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

@stop


