@extends('layouts.dashboard')

@section('content')
<h2>Resumen</h2>
<div class='summary'>
    <div class='summary-card'><h3>Total de Clientes</h3><p>{{ $totalClientes }}</p></div>
    <div class='summary-card'><h3>Total de Órdenes</h3><p>{{ $totalOrdenes }}</p></div>
    <div class='summary-card'><h3>Total de Ingresos</h3><p>${{ number_format($totalIngresos, 2) }}</p></div>
    <div class='summary-card'><h3>Total Pendiente de Pago</h3><p>${{ number_format($totalPendiente, 2) }}</p></div>
</div>
@endsection

