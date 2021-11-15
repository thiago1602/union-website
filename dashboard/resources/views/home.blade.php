@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Pagina Inicial</h1>

<div class="box">
    <div class="container">
        <div class="row">

            <div class="col">

                <div class="box-part text-center">
                    <div class="card" style="width: 10rem">

                    <img loading="lazy" src="https://assetscdn-web.freshchat.com/agent/static/assets/images/settings/Account_settings-9f93bc6df66163d127762a8f0b929197.svg" class="card-img-top" height="80" width="80">
                    <div class="card-body">
                        <a href="http://localhost:8000/livehelperchat-master/lhc_web/index.php/site_admin/" class="btn btn-outline-secondary">Acessar CRM</a>
                    </div>
                    </div>

                </div>
            </div>

            <div class="col">

                <div class="box-part text-center">
                    <div class="card" style="width: 10rem">

                    <img loading="lazy" src="https://assetscdn-web.freshchat.com/agent/static/assets/images/settings/Customize_widget-e20a129f70849993dabea2e202bf3a2a.svg" class="card-img-top" height="80" width="80">
                    <div class="card-body">
                        <a href="https://union-375787506864883051.freshchat.com/a/545342765427769/inbox/0/0" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg>Messenger</a>
                    </div>
                    </div>

                </div>
            </div>

            <div class="col">

                <div class="box-part text-center">

                    <div class="card" style="width: 10rem">

                    <img loading="lazy" src="https://assetscdn-web.freshchat.com/agent/static/assets/images/settings/billing-d3836c3c49c3310720f51324e2be85cd.svg" class="card-img-top" height="80" width="80">
                    <div class="card-body">
                        <a href="{{route('venda.index')}}" class="btn btn-outline-success">Vendas</a>
                    </div>
                    </div>

                </div>
            </div>

            <div class="col">

                <div class="box-part text-center">
                    <div class="card" style="width: 10rem">

                    <img loading="lazy" src="https://assetscdn-web.freshchat.com/agent/static/assets/images/settings/Groups-cabfb54c5682e9debe486e3f7c0c7331.svg" class="card-img-top" height="80" width="80">
                    <div class="card-body">
                        <a href="{{route('cliente.index')}}" class="btn btn-outline-dark">Clientes</a>
                    </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
*{
    margin: 0;
    padding: 0;
}
    .box::after{
        content: '';
        height: 40%;
        width: 40%;
        margin: 10px;
        float: left;
    }
    .box .box-part{
        display: block;
        width: 200px ;
        height: 200px;
        margin: 20px;
        float: left;

    }
    .box .col{
        display: block;
        width: 190px ;
        height: 190px;

    }

</style>

@stop

@section('content')




{{--    <a href="https://union-375787506864883051.freshchat.com/a/545342765427769/inbox/0/0"class="mr-3"><button type="button" class="btn btn-primary btn-lg btn-block">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">--}}
{{--                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>--}}
{{--            </svg>--}}
{{--    Messenger Chat--}}
{{--</button>--}}
{{--        <a href="http://localhost:8000/livehelperchat_laravel/index.php/site_admin/user/login" class="mr-2"><button type="button" class="btn btn-secondary btn-lg btn-block">CRM</button> </a>--}}

@stop

@section('css')


<link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')


@stop
