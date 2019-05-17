@extends('adminlte::page')

@section('title', 'Tecnofit Challenge')

@section('content_header')
    <h1>Editar Pedido</h1>
@stop

@section('content')
    <div class="card border">
        <div class="card-body">
        <form action="/pedidos/{{$ped->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="produtosPedido">Produtos</label>
                    <input type="text" class="form-control" name="produtosPedido" value="{{$ped->produtos}}"
                    id="produtosPedido" placeholder="PRODUTO">
                    <label for="dataPedido">Data</label>
                    <input type="date" class="form-control" name="dataPedido" value="{{$ped->data}}"
                    id="dataPedido" placeholder="DATA">
                    <label for="totalPedido">Total</label>
                    <input type="number" step="0.01" class="form-control" name="totalPedido" value="{{$ped->total}}"
                    id="totalPedido" placeholder="Total">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@stop
