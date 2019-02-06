<html>

<style>
    #box-model {
        background-color: lightgrey;
        width: 300px;
        border: 25px solid green;
        padding: 25px;
        margin: 25px;
    }
</style>

<head>
    <title>@yield('title')</title>
    @include('layout.master_lib')

</head>

<body>

@yield('body')

<div class="container text-center position-panel">
    <h2>@yield('h2')</h2>

    <div class="panel panel-default">
        <div class="panel-body mx-auto d-block">@yield('panel-body')</div>
        <button class="position-button">@yield('button')</button>
    </div>
</div>

</body>

@include('layout.master_lib-end')


</html>