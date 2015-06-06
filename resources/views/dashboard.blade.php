@extends('layouts.master')

@section('title', 'Tableau de bord')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <script type="text/javascript" src="/djembe/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')
    <div class="row">
        <div class="col-md-12">
        	<p>Bienvenue sur ton tableau de bord !</p>
        	<p>Voici des exercices que tu devrais essayer pour t'améliorer.</p>
        	<ul>
        		@foreach ($cours as $cour)
        	    	<li><a href="cours/{{ $cour->id }}">{{ $cour->titre }}</a></li>
        		@endforeach
        	</ul>
        </div>
    </div>
@stop
