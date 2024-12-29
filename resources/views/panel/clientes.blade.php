@extends('layouts.dashboard')

@section('content')
<h2>Clientes</h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ $cliente->telefono }}</td>
    </tr>
    @endforeach
</table>
@endsection

