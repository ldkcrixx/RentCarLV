<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\usuarioToken;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::post('/login', [RentaController::class,'login']);
route::post('/users', [RentaController::class,'usuarios']);
route::post('/users/id', [RentaController::class,'usuarioid']);
route::post('/storeUser', [RentaController::class,'storeUser']);
route::post('/tokenExpiration', [RentaController::class,'expira']);
route::delete('/eliminarUser/{usuarioid}', [RentaController::class,'destroyUser']);


route::post('/storeVehiculos', [VehiculoController::class,'storeVehiculo']);
route::post('/allVehiculo', [VehiculoController::class,'mostrarVehiculo']);
route::post('/idVehiculo', [VehiculoController::class,'idVehiculo']);

route::get('/tipoEconomico', [VehiculoController::class,'economico']);
route::get('/tipoLujo', [VehiculoController::class,'lujo']);
route::get('/tipoCompacto', [VehiculoController::class,'compacto']);
route::get('/tipoNormal', [VehiculoController::class,'normal']);
route::get('/tipoPremium', [VehiculoController::class,'premium']);
route::get('/tipoCamion', [VehiculoController::class,'camion']);




route::post('/tipoVehiculos', [TipoVehiculoController::class,'tipoVehiculo']);
route::post('/tipoId', [TipoVehiculoController::class,'tipoid']);
route::post('/tipoAll', [TipoVehiculoController::class,'todoTipo']);

route::post('/nombreUser', [usuarioToken::class,'getNombre']);

