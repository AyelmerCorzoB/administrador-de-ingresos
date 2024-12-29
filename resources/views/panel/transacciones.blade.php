@extends('layouts.dashboard')

@section('content')
<h2>Transacciones</h2>
<table>
    <tr>
        <th>Tipo</th>
        <th>Detalle</th>
        <th>Monto</th>
        <th>Fecha</th>
    </tr>
    @foreach($transacciones as $transaccion)
    <tr>
        <td>{{ $transaccion->tipo }}</td>
        <td>{{ $transaccion->detalle }}</td>
        <td>${{ number_format($transaccion->monto, 2) }}</td>
        <td>{{ $transaccion->fecha }}</td>
    </tr>
    @endforeach
</table>
@endsection

