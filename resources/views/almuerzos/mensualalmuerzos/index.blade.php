@extends('layouts.almuerzos')

@section('content')
    <section class="main-content">

        <div class="content-left">
            <h2>Pagos Al Dia (${{ number_format($clientesPagados->sum('total_pagado')) }})</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Total Pagado</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                </table>
                <div class="table-body-container">
                    <table>
                        <tbody>
                            @forelse ($clientesPagados as $cliente)
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>${{ number_format($cliente->total_pagado) }}</td>
                                    <td>{{ $cliente->ultima_fecha_pago }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No hay datos.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="content-right">
            <h2>Pagos Pendientes (${{ number_format($clientesPendientes->sum('total_pendiente')) }})</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Total Pendiente</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clientesPendientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}</td>
                            <td>${{ number_format($cliente->total_pendiente) }}</td>
                            <td>{{ $cliente->ultima_fecha_orden }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No hay datos.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection