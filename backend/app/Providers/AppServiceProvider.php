<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\HomepageRepository;
use App\Repositories\HomepageRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(HomepageRepositoryInterface::class, HomepageRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       //
    }
}
