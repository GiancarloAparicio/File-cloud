<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Eloquent\UserRepository;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\FileRepository;
use App\Repository\Interfaces\UserRepositoryI;
use App\Repository\Interfaces\FileRepositoryI;
use App\Repository\Interfaces\EloquentRepositoryI;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryI::class, BaseRepository::class);
        $this->app->bind(UserRepositoryI::class, UserRepository::class);
        $this->app->bind(FileRepositoryI::class, FileRepository::class);
    }
}
