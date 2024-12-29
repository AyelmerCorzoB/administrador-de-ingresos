<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/almuerzos.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="header-content">
        <h1><i class="fas fa-utensils"></i> Almuerzos</h1>
        <nav>
            <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-toggle-label" aria-label="Abrir menú">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            <ul>
                <li><a href="{{ route('clientesalmuerzos.index') }}">Clientes</a></li>
                <li><a href="{{ route('ordenesalmuerzos.index') }}">Órdenes</a></li>
            </ul>
        </nav>
        <a href="../home.php" aria-label="Ir a la página de inicio">
            <img src="storage/images/logo.png" alt="Logo de El sabor de casa" width="60" height="60">
        </a>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 El Sabor de Casa & AlanDev14. Todos los derechos reservados.</p>
    </footer>
</body>
</html>