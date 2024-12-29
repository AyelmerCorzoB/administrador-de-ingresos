<?php

namespace App\Models\almuerzos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteAlmuerzo extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Nombre de la tabla
    protected $primaryKey = 'id_cliente'; // Clave primaria

    protected $fillable = ['nombre', 'telefono'];

    public function ordenesAlmuerzos()
    {
        return $this->hasMany(OrdenAlmuerzo::class, 'id_cliente');
    }
}