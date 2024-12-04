<?php

namespace App\Providers;

use Filament\Facades\Filament; // pastikan namespace benar
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Logic jika ada
    }

    public function boot()
    {
        // Logic untuk Filament
        Filament::registerNavigationGroups([
            'User Management',
            'Food & Beverage Management',
        ]);
    }
}
