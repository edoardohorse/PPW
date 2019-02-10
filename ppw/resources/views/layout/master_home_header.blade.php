<style>
   #id{

       width: 200px;
       height: 400px;
   }

</style>


<header class="container-fluid">

    {{--<h1>HEADER</h1>--}}

    <div class="col-2 float-left">
        <i id="logo" style="background-image: url(' {{ asset('img/logo.png')  }} ');" >ASD Bello culo</i>

    </div>



    <div class="col-9 float-right" id="account">

        <div class="row float-right">
            <span class="account_name">     {{ 'Christian'   }}   </span>
            <span class="account_surname">  {{ 'Meo' }}  </span>

            <a href="/logout" id="btn-logout" class="btn btn-info btn-sm">Esci</a>
        </div>

        <div class="row float-right">
            <a href="/settings_account" id="btn-account" class="btn btn-light btn-lg">Account Personale</a>
        </div>

    </div>


</header>