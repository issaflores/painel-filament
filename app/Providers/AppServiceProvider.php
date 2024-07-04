<?php

namespace App\Filament;

use App\Filament\Resources\UserResource;
use Filament\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::registerResource(UserResource::class);

        // Outros registros e configurações do Filament podem ser adicionados aqui
    }

    public function register()
    {
        // Registros adicionais do serviço podem ser adicionados aqui
    }
}
