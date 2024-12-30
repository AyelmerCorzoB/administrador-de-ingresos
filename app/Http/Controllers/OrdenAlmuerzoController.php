<?php

namespace App\Http\Controllers;

use App\Models\almuerzos\OrdenAlmuerzo;
use App\Models\almuerzos\ClienteAlmuerzo;
use Illuminate\Http\Request;

class OrdenAlmuerzoController extends Controller
{
    public function orden()
    {
        $ordenesAlmuerzos = OrdenAlmuerzo::with('clienteAlmuerzo')->get();
        return view('almuerzos.ordenesalmuerzos.orden', compact('ordenesAlmuerzos'));
    }

    public function orden_create()
    {
        $clientesAlmuerzos = ClienteAlmuerzo::all();
        return view('almuerzos.ordenesalmuerzos.orden_create', compact('clientesAlmuerzos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'detalle' => 'required|string',
            'total' => 'required|numeric',
            'ubicacion' => 'required|string',
            'situacion_pago' => 'sometimes|string',
        ]);

        OrdenAlmuerzo::create(array_merge($request->all(), [
            'fecha_orden' => now(),
            'situacion_pago' => $request->has('situacion_pago') ? 'Pagado' : 'Pendiente',
        ]));

        return redirect()->route('ordenesalmuerzos.orden')->with('success', 'Orden agregada exitosamente.');
    }

    public function destroy($id)
    {
        $orden = OrdenAlmuerzo::findOrFail($id);
        $orden->delete();
        return redirect()->route('ordenesalmuerzos.orden')->with('success', 'Orden eliminada exitosamente.');
    }
}