@extends('layout.principal')

@section('conteudo')
    <h3>Novo produto</h3>
    <br>
    <div class="container">
        <div class="row">
            <form action="/Lulu/estoque/public/produtos/adiciona" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- Nome --}}
                <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" class="form-control">
                </div>

                {{-- Descricao --}}
                <div class="form-group">
                    <label>Descrição</label>
                    <input name="descricao" class="form-control">
                </div>

                {{-- Valor --}}
                <div class="form-group">
                    <label>Valor</label>
                    <input name="valor" class="form-control">
                </div>

                {{-- Quantidade --}}
                <div class="form-group">
                    <label>Quantidade</label>
                    <input name="quantidade" type="number" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>
            </form>
        </div>
    </div>
    <br>
@stop
