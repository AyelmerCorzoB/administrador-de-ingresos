<?php

namespace App\Http\Controllers;

use App\Models\admin\Orden;
use App\Models\admin\Usuario;
use App\Models\admin\Pago;
use App\Models\admin\Transaccion;
use App\Models\admin\Cliente;
use Illuminate\Http\Request;

class PanelController
{
    public function admin()
    {
        $totalClientes = Cliente::count();
        $totalOrdenes = Orden::count();
        $totalIngresos = Orden::where('situacion_pago', 'pagado')->sum('total');
        $totalPendiente = Orden::where('situacion_pago', 'pendiente')->sum('total');

        return view('panel.admin', compact('totalClientes', 'totalOrdenes', 'totalIngresos', 'totalPendiente'));
    }

    public function ordenes()
    {
        $ordenes = Orden::with('cliente')->get();
        return view('panel.ordenes', compact('ordenes'));
    }

    public function clientes()
    {
        $clientes = Cliente::all();
        return view('panel.clientes', compact('clientes'));
    }

    public function usuarios()
    {
        $usuarios = Usuario::all();
        return view('panel.usuarios', compact('usuarios'));
    }

    public function pagos()
    {
        $pagos = Pago::with('cliente')->get(); // Esto trae los pagos con su cliente relacionado
        return view('panel.pagos', compact('pagos')); // Envía los datos a la vista
    }

    public function transacciones()
    {
        $transacciones = Transaccion::all();
        return view('panel.transacciones', compact('transacciones'));
    }
}
