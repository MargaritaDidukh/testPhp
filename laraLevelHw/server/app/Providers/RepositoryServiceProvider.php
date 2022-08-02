<?php

namespace App\Providers;

use App\Interfaces\UsersRepositoryInterface;
use App\Interfaces\VideosRepositoryInterface;
use App\Repositories\UsersRepository;
use App\Repositories\VideosRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
        $this->app->bind(VideosRepositoryInterface::class, VideosRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
