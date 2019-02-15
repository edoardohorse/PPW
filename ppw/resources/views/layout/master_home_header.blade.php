<style>
   #id{

       width: 200px;
       height: 400px;
   }

</style>


<header class="container-fluid">

    {{--<h1>HEADER</h1>--}}

    <div class="col-2 float-left">
        <i id="logo" style="background-image: url(' {{ asset('uploads/logoasd.png')  }} ');" ></i>

    </div>



    <div class="col-9 float-right p-3" id="account">

        <div class="row float-right">
            <span class="account_name mr-2">

                {{DB::table('users')
                                            ->where('member_id','=', Auth::user()->member->id)->first()->nome  }}
            </span>
            <span class="account_surname">{{DB::table('users')
                                            ->where('member_id','=', Auth::user()->member->id)->first()->cognome  }}
            </span>


            <a href="{{route('logout')}}" id="btn-logout" class="btn btn-info btn-sm">Esci</a>

            <div class="ml-2">
                <i id="font-large" style="background-image: url(' {{ asset('img/font.png')  }} ')" onclick="changeFont()" title="Ingrandisci/Diminuisci font"></i>
                <script>
                    function changeFont(){
                        if($('body').hasClass('font-large')){
                            $('body').removeClass('font-large')
                        }
                        else{
                            $('body').addClass('font-large')
                        }
                    }
                </script>
            </div>
        </div>

        {{--<div class="row float-right">--}}
            {{--<a href="/settings_account" id="btn-account" class="btn btn-light btn-lg">Account Personale</a>--}}
        {{--</div>--}}






    </div>

</header>