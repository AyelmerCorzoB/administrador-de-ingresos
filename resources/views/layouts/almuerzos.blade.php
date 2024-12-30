<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/almuerzos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/menuHamburguesa.js') }}"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="header-content">
            <h1><i class="fas fa-utensils"></i> Almuerzos</h1>

            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-toggle-label" aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <nav>
                <ul>
                    <li><a href="{{ route('clientesalmuerzos.index') }}" class="{{ request()->routeIs('clientesalmuerzos.index') ? 'active' : '' }}">Almuerzos</a></li>
                    <li><a href="{{ route('ordenesalmuerzos.orden_create') }}" class="{{ request()->routeIs('ordenesalmuerzos.orden_create') ? 'active' : '' }}">Órdenes</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="botones">
            <div class="button-wrapper">
                <button onclick="location.href='{{ route('ordenesalmuerzos.orden') }}'" aria-label="Ver diario">
                    <i class="fa-solid fa-sun" aria-hidden="true"></i>
                    Diario
                </button>
            </div>
            <div class="button-wrapper">
                <button onclick="location.href='{{ route('clientesalmuerzos.clientes') }}'"
                    aria-label="Agregar nuevo cliente">
                    <i class="fa-solid fa-user" aria-hidden="true"></i>
                    Clientes
                </button>
            </div>
            <div class="button-wrapper">
                <button aria-label="Ver mensual">
                    <i class="fa-solid fa-calendar" aria-hidden="true"></i>
                    Mensual
                </button>
            </div>
            <div class="button-wrapper">
                <button aria-label="Ver Total">
                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    Ver total
                </button>
            </div>

        </section>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 El Sabor de Casa & AlanDev14. Todos los derechos reservados.</p>
    </footer>


    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
