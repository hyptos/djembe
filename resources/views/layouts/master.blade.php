<html>
    <head>
        <title>Djembe - @yield('title')</title>
        @yield('include')
    </head>
    <body>
        <header>
            <h1>Djembe</h1>
            <div>Connexion</div>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
