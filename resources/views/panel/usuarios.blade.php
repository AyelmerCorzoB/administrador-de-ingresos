@extends('layouts.dashboard')

@section('content')
<h2>Usuarios</h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Rol</th>
        <th>Fecha de Registro</th>
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->nombre }}</td>
        <td>{{ $usuario->rol }}</td>
        <td>{{ $usuario->fecha }}</td>
    </tr>
    @endforeach
</table>
@endsection

