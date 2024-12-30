<?php

namespace App\Models\almuerzos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenAlmuerzo extends Model
{
    use HasFactory;

    protected $table = 'ordenes'; // Nombre de la tabla
    protected $primaryKey = 'id_orden'; // Clave primaria
    public $timestamps = false; // Desactiva las marcas de tiempo automáticas

    protected $fillable = ['id_cliente', 'detalle', 'total', 'ubicacion', 'fecha_orden', 'situacion_pago'];

    public function clienteAlmuerzo()
    {
        return $this->belongsTo(ClienteAlmuerzo::class, 'id_cliente');
    }
}
