<?php

namespace App\Providers;

use App\ConsultaCEP;
use Illuminate\Support\ServiceProvider;

class ConsultaCepServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ConsultaCEP::class, function() {
            return new ConsultaCEP(
                config('services.cep.apikey')
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
