<?php

namespace App\Providers;

use App\ConsultaCEP;
use App\ConsultaCEPInterface;
use App\ConsultaCEPNovo;
use Illuminate\Support\ServiceProvider;

class ConsultaCepServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ConsultaCEPInterface::class, function() {
            return new ConsultaCEPNovo(
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
