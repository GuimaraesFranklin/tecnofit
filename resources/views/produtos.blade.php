@extends('adminlte::page')

@section('title', 'Tecnofit Challenge')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    <div class="card border">
        <div class="card-border">
            <h5 class="card-title">Cadastro Geral de Produtos</h5>
@if (count($prods) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>SKU</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
@foreach ($prods as $prod)
                        <tr>
                            <td>{{$prod->id}}</td>
                            <td>{{$prod->sku}}</td>
                            <td>{{$prod->nome}}</td>
                            <td>{{$prod->descricao}}</td>
                            <td>{{$prod->preco}}</td>
                            <td>
                                <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
@endforeach
                </tbody>
            </table>
@endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novoproduto" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>
@stop
