<?php

namespace App\Models\almuerzos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteAlmuerzo extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;
    protected $fillable = ['nombre', 'telefono'];
    public function ordenesAlmuerzos()
    {
        return $this->hasMany(OrdenAlmuerzo::class, 'id_cliente');
    }
}
