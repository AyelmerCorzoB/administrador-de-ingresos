<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table = 'transacciones';
    protected $fillable = ['tipo', 'detalle', 'monto', 'fecha'];
}

