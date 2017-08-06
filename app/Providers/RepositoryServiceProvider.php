<?php

namespace App\Providers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\EloquentTopicRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->bind(TopicRepository::class, EloquentTopicRepository::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
