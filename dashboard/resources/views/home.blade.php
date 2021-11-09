@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Pagina Inicial</h1>

@stop

@section('content')

<p>Bem vindo</p>



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


    <script type="text/javascript">
        var LHCFAQOptions = {status_text:'FAQ',url:'replace_me_with_dynamic_url',identifier:''};
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = '//localhost:8000/livehelperchat_laravel/index.php/por/faq/getstatus/(position)/bottom_right/(top)/450/(units)/pixels';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
@stop
