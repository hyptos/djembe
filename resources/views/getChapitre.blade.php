@extends('layouts.master')

@section('title', 'Chapitre')

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
    <script src="/js/raph.js"></script>
    <script src="/js/metronome.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')
<div class="col-md-2">
@if ($chapitre->id != 1 && $chapitre->id != 7)
            <h1><a href="/chapitre/{{ $chapitre->id - 1}}">
            <span class="glyphicon glyphicon-arrow-left nextExo" aria-hidden="true"></span> Precedent
        </a></h1>
@endif
</div>
<div class="col-md-8 text-center">
    <h1>
        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> &nbsp; {{ $chapitre->titre }}
    </h1>
    <h3>{!!html_entity_decode($chapitre->contenu)!!}</h3>
</div>

    @if(isset($exercices) && !empty($exercices))
            @foreach ($exercices as $exercice)
                @foreach ($exercice as $exo)
                        <h1><a href="/exercice/{{ $exo->id }}">
                            Suivant <span class="glyphicon glyphicon-arrow-right nextExo" aria-hidden="true"></span>
                        </a></h1>
                @endforeach
            @endforeach
    @else
</script>
<div class="col-md-2 text-center">
        <h1><a href="/chapitre/{{ $chapitre->id + 1}}">
            Suivant <span class="glyphicon glyphicon-arrow-right nextExo" aria-hidden="true"></span>
        </a></h1>
        </div>
    @endif

<script type="text/javascript">
    $(function() {
        animateArrowChapter();

        var m = metronome({
            len: 200,
            angle: 20,
            paper: "metronome_container",
            tick: openAndPlay('tick'),
            complete: console.log('done'),
            path: "/son/tick.wav"
        });

        m.start(120, 50);
        $('#stop').on('click',function(e){
            e.preventDefault();
            m.stop();
        })
    });
</script>
@stop


@include('footer')

