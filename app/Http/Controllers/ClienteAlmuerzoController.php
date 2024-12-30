<?php

namespace App\Http\Controllers;

use App\Models\almuerzos\ClienteAlmuerzo;
use Illuminate\Http\Request;

class ClienteAlmuerzoController extends Controller
{
    public function index()
    {
        $clientesAlmuerzos = clienteAlmuerzo::all();
        return view('almuerzos.clientesalmuerzos.index',compact('clientesAlmuerzos'));
    }
    public function clientes()
    {
        $clientesAlmuerzos = ClienteAlmuerzo::all();
        return view('almuerzos.clientesalmuerzos.clientes', compact('clientesAlmuerzos'));
    }

    public function create()
    {
        return view('almuerzos.clientesalmuerzos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'telefono' => 'required|string',
        ]);

        ClienteAlmuerzo::create($request->all());
        return redirect()->route('clientesalmuerzos.clientes')->with('success', 'Cliente agregado exitosamente.');
    }

    public function destroy($id)
    {
        $cliente = ClienteAlmuerzo::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientesalmuerzos.clientes')->with('success', 'Cliente eliminado exitosamente.');
    }
}

