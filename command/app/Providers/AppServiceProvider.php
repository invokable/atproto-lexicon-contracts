<?php

namespace App\Providers;

use App\Console\LexiconContractsCommand;
use App\Console\LexiconEnumCommand;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->commands([
            LexiconEnumCommand::class,
            LexiconContractsCommand::class,
        ]);
    }
}
