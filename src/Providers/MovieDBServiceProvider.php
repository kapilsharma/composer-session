<?php
namespace MovieDB\Providers;

use Illuminate\Support\ServiceProvider;
use MovieDB\MovieDB;

class MovieDBServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('moviedb', function () {
            return new MovieDB();
        });
    }

}