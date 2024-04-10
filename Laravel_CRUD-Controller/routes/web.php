<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controllers\CrudController;
 
Route::get('/', [CrudController::class, 'index']);
Route::post('/create', [CrudController::class, 'create']);
Route::get('/editar/{id_usuario}', [CrudController::class, 'edit']);
Route::put('/update/{id_usuario}', [CrudController::class, 'update']);
Route::get('/delete/{id_usuario}', [CrudController::class, 'destroy']);