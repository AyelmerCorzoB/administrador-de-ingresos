<?php

namespace App\Models\almuerzos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenAlmuerzo extends Model
{
    use HasFactory;
    protected $table = 'ordenes';
    protected $primaryKey = 'id_orden';
    public $timestamps = false;
    protected $fillable = ['id_cliente', 'detalle', 'total', 'ubicacion', 'fecha_orden', 'situacion_pago'];
    public function clienteAlmuerzo()
{
    return $this->belongsTo(ClienteAlmuerzo::class, 'id_cliente', 'id_cliente')->withDefault([
        'nombre' => 'Cliente eliminado o no disponible',
    ]);
}
}
