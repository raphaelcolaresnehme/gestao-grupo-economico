<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Defina suas rotas de API aqui
use App\Http\Controllers\GrupoEconomicoController;
use App\Http\Controllers\BandeiraController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;

Route::resource('grupos', GrupoEconomicoController::class);
Route::resource('bandeiras', BandeiraController::class);
Route::resource('unidades', UnidadeController::class);
Route::resource('colaboradores', ColaboradorController::class);
