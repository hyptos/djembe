@extends('layouts.master')

@section('title', 'Pie sound game')

@section('include')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.4/d3.min.js"></script>
    <script src="/js/d3pie.min.js"></script>
    <script src="/js/utility.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div id="pieChart" style="text-align: center;"></div>
    </div>
</div>
<audio id="do" src="/son/do.mp3" preload="auto"></audio>
<audio id="re" src="/son/re.mp3" preload="auto"></audio>
<audio id="mi" src="/son/mi.mp3" preload="auto"></audio>
<audio id="fa" src="/son/fa.mp3" preload="auto"></audio>
<audio id="sol" src="/son/sol.mp3" preload="auto"></audio>
<audio id="la" src="/son/la.mp3" preload="auto"></audio>
<audio id="si" src="/son/si.mp3" preload="auto"></audio>


<script>
var shuffledContents = [
    {
        "label": "do",
        "value": 20,
        "color": "#2484c1"
    },
    {
        "label": "re",
        "value": 20,
        "color": "#0c6197"
    },
    {
        "label": "mi",
        "value": 20,
        "color": "#4daa4b"
    },
    {
        "label": "fa",
        "value": 20,
        "color": "#90c469"
    },
    {
        "label": "sol",
        "value": 20,
        "color": "#daca61"
    },
    {
        "label": "la",
        "value": 20,
        "color": "#e4a14b"
    },
    {
        "label": "si",
        "value": 20,
        "color": "#e98125"
    }
];
shuffle(shuffledContents);
var pie = new d3pie("pieChart", {
    "header": {
        "title": {
            "text": "Game sound ",
            "fontSize": 24,
            "font": "open sans"
        },
        "subtitle": {
            "text": "Clique sur une zone pour faire un bruit.",
            "color": "#999999",
            "fontSize": 12,
            "font": "open sans"
        },
        "titleSubtitlePadding": 9
    },
    "size": {
        "canvasWidth": 590,
        "pieOuterRadius": "90%"
    },
    "data": {
        "content": shuffledContents
    },
    "labels": {
        "inner": {
            "format":'none'
        },
        "outer":{
            "format":"none"
        },
        "mainLabel": {
            "fontSize": 11
        },
        "lines": {
            "enabled": true
        },
        "truncation": {
            "enabled": true
        }
    },
    "effects": {
        "pullOutSegmentOnClick": {
            "effect": "none",
            "speed": 400,
            "size": 8
        }
    },
    "misc": {
        "gradient": {
            "enabled": true,
            "percentage": 100
        }
    },
    "callbacks": {
        onClickSegment: function(a) {
            console.log(a.data.label);

            $("#" + a.data.label).trigger('play');

        }
    }
});
</script>

@stop
