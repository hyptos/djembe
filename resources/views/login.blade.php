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
    <link rel="stylesheet" type="text/css" href="/css/signup.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
@stop

@include('header')
@section('content')

@if (!isset($user))
<div class="row">
    <div class="col-sm-5 form-box">
    	<div class="form-top">
    		<div class="form-top-left">
    			<h3>Connecte toi</h3>
    		</div>
    		<div class="form-top-right">
    			<i class="fa fa-pencil"></i>
    		</div>
        </div>
        <div class="form-bottom">
            <form role="form" action="login" method="post" class="registration-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                	<label class="sr-only" for="form-email">Email</label>
                	<input type="text" name="email" placeholder="email" class="form-email form-control" id="form-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-password">Mot de passe</label>
                    <input type="text" name="password" placeholder="mot de passe" class="form-password form-control" id="form-password ">
                </div>
                <button type="submit" class="btn btn-primary btn-large">Je me connecte</button>
            </form>
        </div>
    </div>
</div>
@else
<p>Tu es connecte en tant que {{ $user->name }}</p>
@endif
@stop
