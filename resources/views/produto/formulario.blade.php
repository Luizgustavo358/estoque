@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <div class="row">
            <h3>Novo produto</h3>
            <br>

            {{-- Erros --}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="row">
            <form action="/Lulu/estoque/public/produtos/adiciona" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- Nome --}}
                <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" class="form-control" value="{{ old('nome') }}">
                </div>

                {{-- Descricao --}}
                <div class="form-group">
                    <label>Descrição</label>
                    <input name="descricao" class="form-control" value="{{ old('descricao') }}">
                </div>

                {{-- Valor --}}
                <div class="form-group">
                    <label>Valor</label>
                    <input name="valor" class="form-control" value="{{ old('valor') }}">
                </div>

                {{-- Quantidade --}}
                <div class="form-group">
                    <label>Quantidade</label>
                    <input name="quantidade" type="number" class="form-control" value="{{ old('quantidade') }}" />
                </div>

                <button type="submit" class="btn btn-primary">
                    Adicionar
                </button>
            </form>
        </div>
    </div>
    <br>
@stop
