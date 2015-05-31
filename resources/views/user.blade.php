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
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/signup.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')
@section('content')
@section('content')
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>{{ $user->teach == 1 ? 'Prof' : 'pas prof' }}</p>

	@if ($user->teach == 1)
	    <p>On affiche les stats des learners</p>
	@endif

	<p>On affiche ses propres stats dasn tous les cas</p>

<h2><span class="glyphicon glyphicon-stats" aria-hidden="true">&nbsp; Mes statistiques</h2>
<hr>
<table class="table table-striped">
	<tr>
		<th>id</th>
		<th>avancement</th>
		<th>reussite</th>
		<th>temps</th>
		<th>Jour</th>
	</tr>
	@foreach ($user->stats as $stat)
	<tr>
		    <td>{{ $stat->id }}</td>
			<td>{{ $stat->avancement }}</td>
			<td>{{ $stat->reussite }}</td>
			<td>{{ $stat->temps }}</td>
			<td>{{ $stat->created_at}} </td>
	</tr>
	@endforeach
</table>

@stop
