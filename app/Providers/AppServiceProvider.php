<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registre os serviços de qualquer aplicativo.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap qualquer serviço de aplicativo.
     *
     * @return void
     */
    public function boot(): void
    {
        // Corrigir a sintaxe aqui
        Route::prefix('api')  // Define o prefixo "api" para as rotas
            ->middleware('api') // Define o middleware para as rotas da API
            ->group(base_path('routes/api.php'));  // Carrega as rotas do arquivo api.php
    }
}
