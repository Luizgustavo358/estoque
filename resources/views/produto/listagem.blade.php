@extends('layout.principal')

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
            @foreach ($produtos as $p)
                <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
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

    <h4>
        <span class="label label-danger pull-right">
            Um ou menos itens no estoque.
        </span>
    </h4>

    {{-- Mensagem de inserção com Sucesso --}}
    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O Produto {{ old('nome') }} foi adicionado.
        </div>
    @endif

    <br>
@stop
