<html>

    <head>
        @section('head')
            @include('includes.head')
        @show
    </head>
    <body>

    <div class="container">
        @yield('content')
    </div>

    </body>

</html>