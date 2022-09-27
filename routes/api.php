<?php
/// juntasmeyro.com.ar
/// https://www.apiphp.juntasmeyro.wnpower.host/public/api/descuentos

/// local
/// http://127.0.0.1:8000/api/pedidoitems

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
////////////////////////////////////////////////   controlers /-////////////////////////////////////////
use App\Http\Controllers\PedidoitemController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteDescuentoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\JgoComponentesController;
use App\Http\Controllers\ClienteUtilidadController;

Route::group(['middleware' => ['cors']], function () {
    Route::get('/descuentos',[ DescuentoController::class, 'index']);
    Route::post('/descuentos',[ DescuentoController::class, 'store']);
    Route::delete('/descuentos/{id}',[ DescuentoController::class, 'destroy']);
    Route::get('/descuentos/{id}',[ DescuentoController::class, 'show']);
    Route::post('/descuentos/{id}',[ DescuentoController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/productos',[ ProductoController::class, 'index']);
    Route::post('/productos',[ ProductoController::class, 'store']);
    Route::delete('/productos/{id}',[ ProductoController::class, 'destroy']);
    Route::get('/productos/{id}',[ ProductoController::class, 'show']);
    Route::post('/productos/{id}',[ ProductoController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/clientedescuentos',[ ClienteDescuentoController::class, 'index']);
    Route::post('/clientedescuentos',[ ClienteDescuentoController::class, 'store']);
    Route::delete('/clientedescuentos/{id}',[ ClienteDescuentoController::class, 'destroy']);
    Route::get('/clientedescuentos/{id}',[ ClienteDescuentoController::class, 'show']);
    Route::post('/clientedescuentos/{id}',[ ClienteDescuentoController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/pedidoitems',[ PedidoitemController::class, 'index']);
    Route::post('/pedidoitems',[ PedidoitemController::class, 'store']);
    Route::delete('/pedidoitems/{id}',[ PedidoitemController::class, 'destroy']);
    Route::get('/pedidoitems/{id}',[ PedidoitemController::class, 'show']);
    Route::post('/pedidoitems/{id}',[ PedidoitemController::class, 'update']);

    Route::get('/pedidoitemsclienteabierto/{id}',[ PedidoitemController::class, 'pedidositemscliente']);
    Route::post('/pedidoitemsupdateidpedido',[ PedidoitemController::class, 'pedidositemsclienteUpdateIdPedido']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/pedidos',[ PedidoController::class, 'index']);
    Route::post('/pedidos',[ PedidoController::class, 'store']);
    Route::delete('/pedidos/{id}',[ PedidoController::class, 'destroy']);
    Route::get('/pedidos/{id}',[ PedidoController::class, 'show']);
    Route::post('/pedidos/{id}',[ PedidoController::class, 'update']);

    Route::get('/pedidoabierto/{id}',[ PedidoController::class, 'pedidosCliente']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/juegoscomponentes',[ JgoComponentesController::class, 'index']);
    Route::post('/juegoscomponentes',[ JgoComponentesController::class, 'store']);
    Route::delete('/juegoscomponentes/{id}',[ JgoComponentesController::class, 'destroy']);
    Route::get('/juegoscomponentes/{id}',[ JgoComponentesController::class, 'show']);
    Route::post('/juegoscomponentes/{id}',[ JgoComponentesController::class, 'update']);

    Route::post('/componentes',[ JgoComponentesController::class, 'kitComponents']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/clienteutilidad',[ ClienteUtilidadController::class, 'index']);
    Route::post('/clienteutilidad',[ ClienteUtilidadController::class, 'store']);
    Route::delete('/clienteutilidad/{id}',[ ClienteUtilidadController::class, 'destroy']);
    Route::get('/clienteutilidad/{id}',[ ClienteUtilidadController::class, 'show']);
    Route::post('/clienteutilidad/{id}',[ ClienteUtilidadController::class, 'update']);
});