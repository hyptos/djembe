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
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>{{ $user->teach == 1 ? 'Prof' : 'pas prof' }}</p>

	@if ($user->teach == 1)
		<h2><span class="glyphicon glyphicon-stats" aria-hidden="true">&nbsp; Liste des élèves</h2>


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

<h2><span class="glyphicon glyphicon-stats" aria-hidden="true">&nbsp; Mes statistiques</h2>
<hr>

<?php

function getMoyenne($user){
	$result = array();
	foreach ($user->stats as $stat) {
	  $id = $stat->exercice_id;
	  $val = 0;
	  if (isset($result[$id])) {
	     $result[$id][] = $stat->reussite;
	  } else {
	     $result[$id] = array($stat->reussite);
	  }
	}


	$total = array();
	foreach($result as $key => $id){
		$val = 0;
		foreach ($id as $nb => $reussite){
			$val += $reussite;
			$total[$key] = array($nb => $val);
		}
	}

	return $total;
}

$total = getMoyenne($user);
?>
@foreach ($total as $key => $value)
		<p> <a href="/exercice/{{$key}}">Exercice n°{{$key}}</a>
	@foreach ($value as $k => $v)
		<span class="note" data="{{$key}}" ></span></p>
	@endforeach
@endforeach


<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

@unless (Auth::check())
    Il faut se connecter.
@endunless


<script type="text/javascript">
	$(function() {
  		var notes = $('.note');
  		notes.each(function( index ) {
  			var smiley;
		  	getFuzzyNote($( this ).text(), $( this ).attr('data'));
		});
  	});
</script>


@stop


