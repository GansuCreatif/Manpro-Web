<?php

namespace App\Providers;

use Carbon\Carbon; // <-- ini benar, bukan Carbon/Carbon
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Biasanya kosong kalau tidak ada yang didaftarkan
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('id'); // Set locale Carbon ke Bahasa Indonesia
    }
}
