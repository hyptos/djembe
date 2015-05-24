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
      	<li><a href="/dashboard"> Bonjour, {{Auth::user()->name}}</a></li>
      	<li><a href="/logout">Déconnecte toi</a></li>
      @else
  	  	<li><a href="/login">Connecte-toi</a></li>
        <li><a href="/signup">Tu es nouveau ?</a></li>
      @endif
      </ul>
    </nav>
  </div>
</header>

@stop
