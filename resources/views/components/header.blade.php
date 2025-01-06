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
                <li><a href="{{ route('clientesalmuerzos.index') }}" class="{{ request()->routeIs('clientesalmuerzos.index') ? 'active' : '' }}">Inicio</a></li>
            </ul>
        </nav>
    </div>
</header>