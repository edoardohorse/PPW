<div class="container position-panel" id="box">
    <h2>@yield('h2')</h2>

    <div class="panel panel-default">
        <div class="panel-body mx-auto d-block">@yield('panel-body')</div>
        <a href=" @yield('redirect') " class="position-button btn btn-primary btn-lg">@yield('redirect-text')</a>
    </div>
</div>
