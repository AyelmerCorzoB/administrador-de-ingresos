<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nombre', 'telefono'];

    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'id_cliente');
    }
}

