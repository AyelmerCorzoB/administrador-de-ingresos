<?php 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ClienteAlmuerzoController;
use App\Http\Controllers\OrdenAlmuerzoController;
use Illuminate\Support\Facades\Route;

// Rutas para autenticación
Route::get('/', function () {
    return view('login'); // Vista login
})->name('login');

Route::get('/register', function () {
    return view('register'); // Vista register
})->name('register');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth'); // Usar middleware para proteger la ruta


// Rutas para el panel

Route::get('/admin',[PanelController::class,'admin'])->name('panel.dashboard');
Route::get('/ordenes', [PanelController::class, 'ordenes'])->name('panel.ordenes');
Route::get('/clientes', [PanelController::class, 'clientes'])->name('panel.clientes');
Route::get('/pagos', [PanelController::class, 'pagos'])->name('panel.pagos');
Route::get('/transacciones', [PanelController::class, 'transacciones'])->name('panel.transacciones');
Route::get('/usuarios', [PanelController::class, 'usuarios'])->name('panel.usuarios');


// Rutas para Clientes de Almuerzos
Route::get('/clientesalmuerzos',[ClienteAlmuerzoController::class,'index'])->name('clientesalmuerzos.index');
Route::get('/clientesalmuerzos/clientes', [ClienteAlmuerzoController::class, 'clientes'])->name('clientesalmuerzos.clientes');
Route::get('/clientesalmuerzos/create', [ClienteAlmuerzoController::class, 'create'])->name('clientesalmuerzos.create');
Route::post('/clientesalmuerzos', [ClienteAlmuerzoController::class, 'store'])->name('clientesalmuerzos.store');
Route::delete('/clientesalmuerzos/{id}', [ClienteAlmuerzoController::class, 'destroy'])->name('clientesalmuerzos.destroy');

// Rutas para Órdenes de Almuerzos
Route::get('/ordenesalmuerzos/index', [OrdenAlmuerzoController::class, 'orden'])->name('ordenesalmuerzos.orden');
Route::get('/ordenesalmuerzos/create', [OrdenAlmuerzoController::class, 'orden_create'])->name('ordenesalmuerzos.orden_create');
Route::post('/ordenesalmuerzos', [OrdenAlmuerzoController::class, 'store'])->name('ordenesalmuerzos.store');
Route::delete('/ordenesalmuerzos/{id}', [OrdenAlmuerzoController::class, 'destroy'])->name('ordenesalmuerzos.destroy');