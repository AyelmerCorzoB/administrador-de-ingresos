<?php

namespace App\Http\Controllers;

use App\Models\admin\Pago;
use App\Models\admin\Cliente;
use Illuminate\Http\Request;


class PagosAlmuerzosController extends Controller
{
    public function pagos()
    {
        $pagos = Pago::with('cliente')->get(); // Esto trae los pagos con su cliente relacionado
        return view('almuerzos.pagosalmuerzos.pagos', compact('pagos')); // Envía los datos a la vista
    }

    
}