@extends('adminlte::page')

@section('title', 'Tecnofit Challenge')

@section('content_header')
    <h1>Cadastro de Produto</h1>
@stop

@section('content')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf
                <div class="form-group">
                    <label for="skuProduto">SKU</label>
                    <input type="text" class="form-control" name="skuProduto" id="skuProduto" placeholder="SKU">
                    <label for="nomeProduto">Nome</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="NOME">
                    <label for="descProduto">Descrição</label>
                    <input type="text" class="form-control" name="descProduto" id="descProduto" placeholder="DESCRIÇÃO">
                    <label for="precoProduto">Preço</label>
                    <input type="number" step="0.01" class="form-control" name="precoProduto" id="precoProduto" placeholder="PREÇO">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@stop
