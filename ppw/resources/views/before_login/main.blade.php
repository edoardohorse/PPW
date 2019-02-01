<html>

    <head>

        <title>@yield('title')</title>
        @include('before_login/lib')

    </head>

    <body>

        @yield('body')

    </body>

    @include('before_login/lib_end')


</html>