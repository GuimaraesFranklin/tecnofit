@extends('adminlte::page')

@section('title', 'Tecnofit Challenge')

@section('content_header')
    <h1>Pedidos</h1>
@stop

@section('content')
<div class="card border">
        <div class="card-border">
            <h5 class="card-title">Cadastro Geral de Pedidos</h5>
@if (count($peds) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Produto</th>
                        <th>Data</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
@foreach ($peds as $ped)
                        <tr>
                            <td>{{$ped->id}}</td>
                            <td>{{$ped->produtos}}</td>
                            <td>{{$ped->data}}</td>
                            <td>{{$ped->total}}</td>
                            <td>
                                <a href="/pedidos/editar/{{$ped->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/pedidos/apagar/{{$ped->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
@endforeach
                </tbody>
            </table>
@endif
        </div>
        <div class="card-footer">
            <a href="/pedidos/novopedido" class="btn btn-sm btn-primary" role="button">Novo Pedido</a>
        </div>
    </div>
@stop
