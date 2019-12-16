<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('productos', 'api\ProductoController');
Route::apiResource('tiendas', 'api\TiendaController');
Route::apiResource('categorias', 'api\CategoriaController');
Route::apiResource('carritos', 'api\CarritoController');
Route::post('agregar', 'api\CarritoController@agregar');
Route::post('eliminar', 'api\CarritoController@eliminar');
Route::post('registro', 'AuthController@registro');
Route::post('comprar', 'api\CarritoController@comprar');
Route::post('cuenta', 'api\CarritoController@cuenta');
Route::post('valor', 'api\CarritoController@valor');





Route::group([

    'middleware' => 'api',
    

], function () {

    Route::post('login', 'AuthController@login');
    
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
