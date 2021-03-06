<?php

namespace Joselfonseca\LaravelApiTools\Providers;

use Illuminate\Support\ServiceProvider;
use Joselfonseca\LaravelApiTools\Console\GenerateEntities;

/**
 * Class LaravelApiToolsServiceProvider
 * @package Joselfonseca\LaravelApiTools\Providers
 */
class LaravelApiToolsServiceProvider extends ServiceProvider
{


    /**
     *
     */
    public function boot()
    {

    }


    /**
     * Register the error handler for responses
     */
    public function register()
    {
        $this->commands([
            GenerateEntities::class
        ]);
    }

}