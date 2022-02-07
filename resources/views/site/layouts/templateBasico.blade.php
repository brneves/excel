<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>{{$title ?? 'Concursos e Seletivos'}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!--Fonts Google-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <link rel="stylesheet" href="{{ asset('css/sigconcursos.css') }}">

    <!--Favicon-->
    <link rel="icon" href="{{url('assets/site/images/favicon.png')}}" type="image/png">
</head>
<body>

    <header>
        <div class="top-bar nav-bar navbar-default">
            <div class="container-fluid">
                <div class="container">
                    <div class="row py-2">
                        <div class="col-md-12 text-right">
                            @if( !auth()->check() )
                                <div class="main-auth">
                                    <a href="{{ route('login')}}" class="sign btn btn-primary">LOGAR</a>

                                    <a href="{{ route('register')}}" class="sign btn btn-primary">CADASTRAR</a>
                                </div>
                            @else
                                <div class="main-user-auth">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle user-auth" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            @if (auth()->user()->foto)
                                                <img src="{{ url('storage/users/'.auth()->user()->foto )}}" class="img-header-user img-circle">
                                            @else
                                                <img src="{{ url('assets/site/images/no-image.png')}}"  class="img-header-user ">
                                            @endif
                                            {{ auth()->user()->name }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="dropdown-divider"></div>
                                            <div><a class="dropdown-item" href="{{ route('meu.perfil')}}">Meu Perfil</a></div>
                                            <div class="dropdown-divider"></div>
                                            <div><a class="dropdown-item" href="{{ route('logout.user')}}">Logout</a></div>
                                            <div class="dropdown-divider"></div>

                                            @if( auth()->user()->administrador)
                                                <div>
                                                    <a class="dropdown-item" href="{{ route('ADMIN')}}">Administração</a>
                                                    <div class="dropdown-divider"></div>
                                                </div>
                                            @endif
                                        </div>
                                    </div><!-- main-user-auth -->
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('imagens/concursos.png') }}" alt="SigConcursos" class="img-fluid">
                    </div>
                </div>

            </div>

        </div>
        <!-- /top-bar -->



    </header>

    <div class="main">

    </div>


    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- JS para Inscrição -->
    <script src="{{url('assets/painel/js/javascript-inscricao35.js')}}"></script>

    <!-- JS para Cadastro de Novo User -->
    <script src="{{url('assets/painel/js/javascript-cadastro11.js')}}"></script>
</body>
</html>
