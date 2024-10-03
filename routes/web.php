<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/productos');
});

/*
|
| OJO: Esta ruta que se crea aqui, cumple la función completa para el CRUD Básico
| mencionado en el pdf enviado via email
|
*/
Route::resource('productos', ProductController::class);
