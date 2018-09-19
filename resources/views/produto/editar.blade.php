@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <h3>Atualizar Produto {{ $p->nome }}:</h3>
            <br>
        </div>

        <div class="row">
            <form action="/Lulu/estoque/public/produtos/atualizar" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                {{-- ID --}}
                <div class="form-group">
                    <label>ID</label>
                    <input name="id" class="form-control" value="{{ $p->id }}" disabled />
                </div>

                {{-- Nome --}}
                <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" class="form-control" value="{{ $p->nome }}" />
                </div>

                {{-- Descricao --}}
                <div class="form-group">
                    <label>Descricao</label>
                    <input name="descricao" class="form-control" value="{{ $p->descricao }}" />
                </div>

                {{-- Valor --}}
                <div class="form-group">
                    <label>Valor</label>
                    <input name="valor" class="form-control" value="{{ $p->valor }}" />
                </div>

                {{-- Quantidade --}}
                <div class="form-group">
                    <label>Quantidade</label>
                    <input name="quantidade" type="number"
                           class="form-control" value="{{ $p->quantidade }}" />
                </div>

                <button type="submit" class="btn btn-primary">
                    Atualizar
                </button>
            </form>
        </div>
    </div>
    <br>
@stop
