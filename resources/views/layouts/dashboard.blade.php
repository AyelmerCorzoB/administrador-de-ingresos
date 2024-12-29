<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>

<div class="dashboard">
    <div class="sidebar">
        <h2>Panel</h2>
        <ul>
            <li><a href="{{ route('panel.dashboard') }}" class="{{ request()->routeIs('panel.inicio') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('panel.ordenes') }}" class="{{ request()->routeIs('panel.ordenes') ? 'active' : '' }}">Órdenes</a></li>
            <li><a href="{{ route('panel.clientes') }}" class="{{ request()->routeIs('panel.clientes') ? 'active' : '' }}">Clientes</a></li>
            <li><a href="{{ route('panel.pagos') }}" class="{{ request()->routeIs('panel.pagos') ? 'active' : '' }}">Pagos</a></li>
            <li><a href="{{ route('panel.transacciones') }}" class="{{ request()->routeIs('panel.transacciones') ? 'active' : '' }}">Transacciones</a></li>
            <li><a href="{{ route('panel.usuarios') }}" class="{{ request()->routeIs('panel.usuarios') ? 'active' : '' }}">Usuarios</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>

