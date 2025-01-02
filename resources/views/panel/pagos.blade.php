@extends('layouts.dashboard')

@section('content')
<h2>Pagos</h2>
<table>
    <tr>
        <th>Cliente</th>
        <th>Monto</th>
        <th>Fecha</th>
    </tr>
    @foreach($pagos as $pago)
    <tr>
        <td>{{ $pago->clientes->nombre }}</td>
        <td>${{ number_format($pago->monto, 2) }}</td>
        <td>{{ $pago->fecha_pago }}</td>
    </tr>
    @endforeach
</table>
@endsection

