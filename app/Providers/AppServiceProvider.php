<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

//Class && Interfaces Repositories
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

// Class && Interfaces Servicess
use App\Services\AuthService;
use App\Services\Interfaces\AuthServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class, function ($app) {
            return new UserRepository($app->make(User::class));
        });
        $this->app->bind(AuthServiceInterface::class, function ($app) {
            return new AuthService($app->make(UserRepository::class));
        });
    }
}
