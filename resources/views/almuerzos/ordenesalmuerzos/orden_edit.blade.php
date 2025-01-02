@extends('layouts.almuerzos')

@section('content')
<h1 class="text-center">Editar Orden de Almuerzo</h1>

<form method="POST" action="{{ route('ordenesalmuerzos.update', $orden->id_orden) }}" class="form-orden">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="detalle" class="form-label">Detalle:</label>
        <input type="text" id="detalle" name="detalle" value="{{ $orden->detalle }}" required class="form-input">
    </div>

    <div class="form-group">
        <label for="total" class="form-label">Total:</label>
        <input type="number" id="total" name="total" value="{{ $orden->total }}" required class="form-input">
    </div>

    <div class="form-group">
        <label for="ubicacion" class="form-label">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" value="{{ $orden->ubicacion }}" required class="form-input">
    </div>

    <div class="form-group">
        <label for="situacion_pago" class="form-label">Situación de Pago:</label>
        <select id="situacion_pago" name="situacion_pago" class="form-select">
            <option value="Pagado" {{ $orden->situacion_pago == 'Pagado' ? 'selected' : '' }}>Pagado</option>
            <option value="Pendiente" {{ $orden->situacion_pago == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
