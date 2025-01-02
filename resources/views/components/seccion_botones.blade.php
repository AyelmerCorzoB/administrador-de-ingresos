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
        <button onclick="location.href='{{ route('mensualalmuerzos.index') }}'" aria-label="Ver mensual">
            <i class="fa-solid fa-calendar" aria-hidden="true"></i>
            Mensual
        </button>
    </div>
    <div class="button-wrapper">
        <button  aria-label="Ver Total">
            <i class="fa-solid fa-eye" aria-hidden="true"></i>
            Ver total
        </button>
    </div>

</section>