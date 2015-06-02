@section('header')

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Djembe</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
        <li><a href="/"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> &nbsp; Tableau de bord</a></li>
      	<li><a href="/user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; Mon compte</a></li>
      	<li><a href="/logout"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> &nbsp; Déconnecte toi</a></li>
      @else
  	  	<li><a href="/login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; Connecte-toi</a></li>
        <li><a href="/signup"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp; Tu es nouveau ?</a></li>
      @endif
      </ul>
    </nav>
  </div>
</header>

@stop
