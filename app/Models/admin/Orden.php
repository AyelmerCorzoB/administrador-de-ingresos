<?php
namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';
    protected $fillable = ['id_cliente', 'detalle', 'ubicacion', 'total', 'fecha_orden', 'situacion_pago'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente')
                    ->onDelete('set null'); // Evita que las órdenes se eliminen cuando se elimina un cliente
    }
}
