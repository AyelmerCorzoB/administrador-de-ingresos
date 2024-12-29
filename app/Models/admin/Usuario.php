<?php 
namespace App\Models\admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'usuarios';

    // Campos asignables masivamente
    protected $fillable = ['nombre', 'password', 'rol', 'fecha'];

    // Ocultar la password al serializar
    protected $hidden = ['password'];
}