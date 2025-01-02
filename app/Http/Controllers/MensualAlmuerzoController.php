<?php

namespace App\Http\Controllers;

use App\Models\almuerzos\ClienteAlmuerzo;
use Illuminate\Support\Facades\DB;

class MensualAlmuerzoController extends Controller
{
    public function index()
    {
        // Consulta para clientes pagados
        $clientesPagados = ClienteAlmuerzo::select('clientes.nombre', 
                DB::raw('SUM(ordenes.total) as total_pagado'), 
                DB::raw('MAX(ordenes.fecha_orden) as ultima_fecha_pago'))
            ->join('ordenes', 'clientes.id_cliente', '=', 'ordenes.id_cliente')
            ->where('ordenes.situacion_pago', 'pagado')
            ->groupBy('clientes.id_cliente', 'clientes.nombre') // Agregar 'clientes.nombre'
            ->orderByDesc('total_pagado')
            ->get();

        // Consulta para clientes pendientes
        $clientesPendientes = ClienteAlmuerzo::select('clientes.nombre', 
                DB::raw('SUM(ordenes.total) as total_pendiente'), 
                DB::raw('MAX(ordenes.fecha_orden) as ultima_fecha_orden'))
            ->join('ordenes', 'clientes.id_cliente', '=', 'ordenes.id_cliente')
            ->where('ordenes.situacion_pago', 'pendiente')
            ->groupBy('clientes.id_cliente', 'clientes.nombre') // Agregar 'clientes.nombre'
            ->orderByDesc('total_pendiente')
            ->get();

            return view('almuerzos.mensualalmuerzos.index', compact('clientesPagados', 'clientesPendientes'));
        }
}
