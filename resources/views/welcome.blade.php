@extends('layouts.master')

@section('title', 'Accueil')

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
    @if(Auth::check())
    <div class="themes">
        <div class="container">
            <section>
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"></div>
                                    <div class="ch-info-back">
                                        <h3>Solfège</h3>
                                        <p><a href="/chapitre/1">Commencer</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back">
                                        <h3>Instruments</h3>
                                        <p><a href="/dashboardInstruments">Commencer</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                        <h3>Histoire</h3>
                                        <p><a href="/chapitre/11">Commencer</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </section>
        </div>
    </div>
    @else
        <div class="row">
    <div class="col-sm-6 form-box">
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
                    <input type="password" name="password" placeholder="mot de passe" class="form-password form-control" id="form-password ">
                </div>
                <button type="submit" class="btn btn-primary btn-large">Je me connecte</button>
            </form>
        </div>
    </div>
    <div class="col-sm-6 form-box">
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
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <label class="sr-only" for="form-first-name">First name</label>
                    @if (!isset($user))
                       <input type="text" name="name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                    @else
                        <input type="text" name="name" placeholder="{{$user->name}}" class="form-first-name form-control" id="form-first-name">
                    @endif
                </div>
                @if (!isset($message))
                <div class="form-group">
                    <label class="sr-only" for="form-email">Email</label>
                    <input type="text" name="email" placeholder="email" class="form-email form-control" id="form-email">
                </div>
                @else
                <div class="form-group has-error">
                  <label class="control-label" for="inputError1">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="{{$user->email}}" name="email">
                </div>
                @endif
                <div class="form-group">
                    <label class="sr-only" for="form-password">Mot de passe</label>
                    <input type="password" name="password" placeholder="mot de passe" class="form-password form-control" id="form-password ">
                </div>
                  <div class="checkbox">
                    <label>
                      <input type="radio" name="teach" class="signup"> Professeur
                    </label>
                  </div>

                <button type="submit" class="btn btn-primary btn-large">Je m'enregistre</button>
            </form>
        </div>
    </div>
</div>
    @endif
@stop

@include('footer')
