@extends('layout.principal')

@section('conteudo')
    <h3>Detalhes do produto: {{ $p->nome }}</h3>
    <br>
    <div class="container">
        <div class="row">
            <ul>
                <li><b>Valor:</b> R$ {{ $p->valor }}</li>
                <li><b>Descrição:</b> {{ $p->descricao or 'nenhuma descrição informada' }}</li>
                <li><b>Quantidade em estoque:</b> {{ $p->quantidade }}</li>
            </ul>
        </div>
    </div>
    <br>
@stop
