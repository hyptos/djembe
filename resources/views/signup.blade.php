


@extends('layouts.master')

@section('title', 'All Users')

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
    <link rel="stylesheet" type="text/css" href="/css/signup.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@section('content')
<div class="row">
    <div class="col-sm-5 form-box">
    	<div class="form-top">
    		<div class="form-top-left">
    			<h3>Enregistre toi</h3>
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="signup" method="post" class="registration-form">
            	<div class="form-group">
            		<label class="sr-only" for="form-first-name">First name</label>
                	<input type="text" name="name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-email">Email</label>
                	<input type="text" name="email" placeholder="email" class="form-email form-control" id="form-email">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-password">Mot de passe</label>
                	<input type="text" name="password" placeholder="mot de passe" class="form-password form-control" id="form-password ">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-teach">teach</label>
                	<input type="text" name="teach" placeholder="teach" class="form-teach form-control" id="form-teach">
                </div>
                <button type="submit" class="btn btn-primary btn-large">Je m'enregistre</button>
            </form>
        </div>
    </div>
</div>
@stop
