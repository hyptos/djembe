@section('header')

<link rel="stylesheet" href="/css/style.css">
<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="containerNavbar">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="/"><img src='/images/Djembe.png' height='59' /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li><a href="/"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> &nbsp; Tableau de bord</a></li>
          <li><a href="/user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; Mon compte</a></li>
          <li><a href="/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> &nbsp; Déconnecte toi</a></li>
        @else
          <li><a href="/login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; Connecte-toi</a></li>
          <li><a href="/signup"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp; Tu es nouveau ?</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
</header>
<div class="panel panel-default banniere" >
    <div class="panel-body">
      <img src="/images/banniere.jpg" class="imgBanniere" />
    </div>
</div>

@stop
