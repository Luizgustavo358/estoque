@extends('principal')

@section('conteudo')
    @if(@empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastro.
        </div>
    @else
    <h1>Listagem de Produtos</h1>
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <td><b>Nome</b></td>
            <td><b>Valor</b></td>
            <td><b>Descrição</b></td>
            <td><b>Quantidade</b></td>
            <td><b>Link</b></td>
        </thead>
        @foreach ($produto as $p)
            <tr>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->valor }}</td>
                <td>{{ $p->descricao }}</td>
                <td>{{ $p->quantidade }}</td>
                <td>
                    <a href="/Lulu/estoque/public/produtos/mostra/{{ $p->id }}">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    @endif    
@stop