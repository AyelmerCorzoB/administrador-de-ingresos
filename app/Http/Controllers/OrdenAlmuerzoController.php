<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\WeekDay;
use Illuminate\Http\Request;
use App\Models\almuerzos\OrdenAlmuerzo;
use App\Models\almuerzos\ClienteAlmuerzo;

class OrdenAlmuerzoController extends Controller
{
    public function orden()
    {
        $inicioSemana = Carbon::now()->startOfWeek();  
        $finSemana = Carbon::now()->endOfWeek();       

        // Filtramos las órdenes por la fecha dentro del rango de la semana
        $ordenesAlmuerzos = OrdenAlmuerzo::with('clienteAlmuerzo')
        ->whereBetween('fecha_orden', [$inicioSemana, $finSemana])
        ->get();

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

    public function edit($id_orden)
    {
        $orden = OrdenAlmuerzo::findOrFail($id_orden);
        return view('almuerzos.ordenesalmuerzos.orden_edit', compact('orden'));
    }
    public function update(Request $request, $id_orden)
    {
        $request->validate([
            'detalle' => 'required|string',
            'total' => 'required|numeric',
            'ubicacion' => 'required|string',
            'situacion_pago' => 'sometimes|string',
        ]);

        $orden = OrdenAlmuerzo::findOrFail($id_orden);
        $orden->update($request->all());

        return redirect()->route('ordenesalmuerzos.orden')->with('success', 'Orden actualizada exitosamente.');
    }


    public function destroy($id)
    {
        $orden = OrdenAlmuerzo::findOrFail($id);
        $orden->delete();
        return redirect()->route('ordenesalmuerzos.orden')->with('success', 'Orden eliminada exitosamente.');
    }
}
