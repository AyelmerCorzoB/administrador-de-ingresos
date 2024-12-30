<?php 
namespace App\Http\Controllers;

use App\Models\admin\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Registro de usuario
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|unique:usuarios',
            'password' => 'required|string',
            'rol' => 'required|in:admin,almuerzos,xbox',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'password' => Hash::make($request->password),
            'rol' => $request->rol,
            'fecha' => now(),
        ]);

        return redirect('/')->with('success', 'Registro exitoso');
    }

    // Inicio de sesión
    public function login(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'password' => 'required|string',
        ]);

        $usuario = Usuario::where('nombre', $request->nombre)->first();

        if ($usuario && Hash::check($request->password, $usuario->password)) {
            session([
                'nombre' => $usuario->nombre,
                'rol' => $usuario->rol,
            ]);

            return match ($usuario->rol) {
                'admin' => redirect('/admin'),
                'almuerzos' => redirect('/clientesalmuerzos'),
                'xbox' => redirect('/xbox'),
                default => redirect('/home'),
            };
        }

        return back()->withErrors(['error' => 'Credenciales incorrectas']);
    }

    // Cerrar sesión
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
