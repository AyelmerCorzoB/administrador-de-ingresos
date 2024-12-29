@extends('layouts.dashboard')

@section('content')
<h2>Pedidos</h2>
<table>
    <tr>
        <th>Cliente</th>
        <th>Detalle</th>
        <th>Ubicación</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Estado</th>
    </tr>
    @foreach($pedidos as $pedido)
    <tr>
        <td>{{ $pedido->cliente->nombre }}</td>
        <td>{{ $pedido->detalle }}</td>
        <td>{{ $pedido->ubicacion }}</td>
        <td>${{ number_format($pedido->total, 2) }}</td>
        <td>{{ $pedido->fecha_orden }}</td>
        <td>{{ $pedido->situacion_pago }}</td>
    </tr>
    @endforeach
</table>
@endsection

