@extends('layouts.master')

@section('title', 'Cours')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/style6.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')
	<h1>{{ $cours->titre }}</h1>
	<p>Ce cours est de difficulte : {{ $cours->difficulte }}.</p>
	<h2>Les chapitres disponibles dans ce cours</h2>
	@if (isset($chapitres))
	<ul>
		@foreach ($chapitres as $chapitre)
	    	<li><a href="/chapitre/{{ $chapitre->id }}">{{ $chapitre->titre }}</a></li>
		@endforeach
	</ul>
    @else
        <p>Pas de chapitre de disponible pour ce cours.</p>
    @endif
@stop
