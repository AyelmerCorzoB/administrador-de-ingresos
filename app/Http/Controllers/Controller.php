<?php 
namespace App\Http\Controllers; // Asegúrate de que sea "Controllers" y no "Controller"

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // Usamos traits para manejar la autorización y validación
    use AuthorizesRequests, ValidatesRequests;
}
