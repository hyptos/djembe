@extends('layouts.master')

@section('title', 'Chapitre')

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
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')
<div class="col-md-8 text-center">
    <h1>
        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; {{ $chapitre->no }} - {{ $chapitre->titre }}
    </h1>
    <p>{{ $chapitre->contenu }}.</p>
</div>

<div class="col-md-4 text-center">
    @if(isset($exercices))
            @foreach ($exercices as $exercice)
                @foreach ($exercice as $exo)
                        <h1><a href="/exercice/{{ $exo->id }}">
                            Suivant <span class="glyphicon glyphicon-arrow-right nextExo" aria-hidden="true"></span>
                        </a></h1>
                @endforeach
            @endforeach
    @else
        <p>Pas d'exercice de disponible pour ce chapitre.</p>
    @endif
</div>
@stop



