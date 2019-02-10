<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @include('layout.master_lib')

    </head>

    <body>

        @yield('body')

    </body>

    @include('layout.master_lib-end')


</html>