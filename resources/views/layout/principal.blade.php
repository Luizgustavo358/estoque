<!DOCTYPE html>
<html>
    <head>
        {{-- CSS --}}
        <link href="css/app.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        {{--<link href="../../../public/css/bootstrap.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Controle de estoque</title>
    </head>

    <body>
        {{--<div class="container">--}}
            {{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">--}}
                {{--<div class="container-fluid">--}}
                    {{--<div class="navbar-header">--}}
                        {{--<a class="navbar-brand" href="{{ action('ProdutoController@lista') }}">--}}
                            {{--Estoque Laravel--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li><a href="{{ action('ProdutoController@lista') }}">Listagem</a></li>--}}
                        {{--<li><a href="{{ action('ProdutoController@novo') }}">Novo</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</nav>--}}

            {{-- Menu --}}
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ action('ProdutoController@lista') }}">
                            Estoque Laravel
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
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
                </div>
            </nav>


            {{-- Conteudo --}}
            @yield('conteudo')

            {{-- Footer --}}
            <footer class="card-footer">
                <p>© Livro de Laravel da Casas do Código</p>
            </footer>
        {{--</div>--}}
    </body>
</html>
