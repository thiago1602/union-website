

    <html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>

{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}" />
        <title>Union</title>

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}--}}
{{--        </style>--}}


{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito', sans-serif;--}}

{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar-se</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

        <body>
                <header class="menu-principal">


                    <main>
                        <div class="header-1">
                            <div class="logo">
                                <img src="{{asset('/img/logo.png')}}" />
                            </div>
                            <div class="redes-sociais">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('/img/rss.png')}}"  alt=""/>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('/img/face.png')}}" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('/img/tw.png')}}" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('/img/linkedin.png')}}" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </main>
                </header>
                <main class="col-100 menu-urls">
                    <div class="header-2">
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>
                                    <a href="">Sobre nós</a>
                                </li>
                                <li>
                                    <a href="">Serviço</a>
                                </li>
                                <li>
                                    <a href="">Páginas</a>
                                </li>
                                <li>
                                    <a href="">Contato</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">Área da Empresa</a>
                                </li>
                            </ul>
                        </div>
                        <div class="busca">
                            <input placeholder="Encontrar" type="text" />
                        </div>
                    </div>
                </main>
                <div class="col-100">
                    <div class="slider-principal">
                        <img src="{{asset('/img/imagem3.png')}}" />



                    </div>
                </div>
                <div class="col-100">
                    <div class="content texto-destaque">
                        <h1>Union CRM & Omnichannel <strong>para conectar</strong> ainda mais o seu negócio.</h1>


                        <div class="col-3 bloco-texto">
                            <img src="{{asset('/img/content-1.png')}}" />
                            <h3><b>Union</b> é simplesmente</h3>
                            <p>Uma plataforma Omnichannel que conecta você aos seus clientes de maneira rápida e segura através da
                                rede social, sem
                                burocracias.
                            </p>
                        </div>
                        <div class="col-3 bloco-texto" style="margin-top: 6em;">
                            <img src="{{asset('/img/content-2.png')}}" />
                            <h3><b>Union</b> é tambem</h3>
                            <p>Uma plataforforma CRM que interage com os clientes de maneira eficiente, afim de atender as
                                suas demandas.
                            </p>
                        </div>
                        <div class="col-3 bloco-texto">
                            <img src="{{asset('/img/content-3.png')}}" />
                            <h3><b>Union</b> é tambem</h3>
                            <p>Totalmente digital, que permite a interação 100% remota com o cliente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-100 bloco-imagens-texto">
                    <div class="content" style="margin-left: 24%; float: left;">
                        <div class="col-3 bloco-texto bloco-imagem">
                            <img src="{{asset('/img/imagem1.png')}}">
                            <p><b>Union CRM & Omnichannel</b></p>
                            <p>
                            </p>
                        </div>
                        <div class="col-3 bloco-texto bloco-imagem">
                            <img src="{{asset('/img/imagem2.png')}}">
                            <p><b>Union CRM & Omnichannel</b></p>
                            <p>
                            </p>
                        </div>
                        <div class="col-3 bloco-texto bloco-imagem">
                            <img src="{{asset('/img/imagem3.png')}}">
                            <p><b>Union CRM & Omnichannel</b></p>
                            <p>
                            </p>
                        </div>
                    </div>
                    <div class="content" style="margin-left: 24%; float: left;">
                        <div class="col-3 bloco-texto bloco-imagem">
                            <img src="{{asset('/img/imagem4.png')}}">
                            <p><b>Union CRM & Omnichannel</b></p>
                            <p>
                            </p>
                        </div>
                        <div class="col-3 bloco-texto bloco-imagem">
                            <img src="{{asset('/img/imagem5.png')}}" alt="">
                            <p><b>Union CRM & Omnichannel</b></p>
                            <p>
                            </p>
                        </div>
                        <div class="col-3 bloco-texto bloco-imagem">
                            <img src="{{asset('/img/imagem6.png')}}">
                            <p><b>Union CRM & Omnichannel</b></p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="col-100 footer">
                        <div class="content">


                            <div class="col-4">
                                <h3><b>Um pouco sobre nós</b></h3>
                                <p>
                                    A plataforma Union nasceu com o objetivo de conectar CRM & Omnichannel em um só lugar,
                                    conectando microempresas com seus clientes utilizando o método da rede social, com suporte
                                    de CRM para que com mais agilidade e de qualquer lugar, desde que tenham internet.
                                </p>
                            </div>
                            <div class="col-4">
                                <h3><b>Entrar em contato</b></h3>
                                <p>

                                </p>
                                <p class="local">Marilia, SP
                                <p>
                                <p class="emailico">unionsystem2021@gmail.com
                                <p>
                                <p class="telefoneico">(14)9999-9999
                                <p>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="col-100 footer-2">

                </div>


                <script type="text/javascript" src="{{ asset('/js/jquery-migrate.js') }}"></script>
                <script type="text/javascript" src="{{ asset('/js/slick.js') }}"></script>
                <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>

                <script>var LHC_API = LHC_API||{};
                    LHC_API.args = {mode:'widget',lhc_base_url:'//localhost:8000/livehelperchat-master/lhc_web/index.php/',wheight:450,wwidth:350,pheight:520,pwidth:500,leaveamessage:true,check_messages:false,lang:'por/'};
                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.setAttribute('crossorigin','anonymous'); po.async = true;
                        var date = new Date();po.src = '//localhost:8000/livehelperchat-master/lhc_web/design/defaulttheme/js/widgetv2/index.js?'+(""+date.getFullYear() + date.getMonth() + date.getDate());
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
    </body>

</html>
