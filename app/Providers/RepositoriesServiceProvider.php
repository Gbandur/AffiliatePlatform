<?php

namespace App\Providers;

use App\Repositories\LeadRepository;
use App\Repositories\LeadRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(LeadRepositoryInterface::class, LeadRepository::class);
    }
}
