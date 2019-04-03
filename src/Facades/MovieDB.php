<?php
namespace MovieDB\Facades;

use Illuminate\Support\Facades\Facade;

class MovieDB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'moviedb';
    }
}
