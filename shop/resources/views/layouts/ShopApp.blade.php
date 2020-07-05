<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
            @yield('header')    
        </header>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            <p>shop page 2020/07/03</p>
        </footer>
    </body>
</html>