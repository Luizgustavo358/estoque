<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- CSS --}}
        <link href="css/app.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        {{--<link href="../../../public/css/bootstrap.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Controle de estoque</title>
    </head>

    <body>
            {{-- Menu --}}
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ action('ProdutoController@lista') }}">
                            Estoque Laravel
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li>
                                <a href="{{ action('ProdutoController@lista') }}">
                                    Listagem
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('ProdutoController@novo') }}">
                                    Novo
                                </a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>


                </div>
            </nav>


            {{-- Conteudo --}}
            @yield('conteudo')

            {{-- Footer --}}
            <footer class="card-footer">
                <p>© Livro de Laravel da Casas do Código</p>
            </footer>
    </body>
</html>
