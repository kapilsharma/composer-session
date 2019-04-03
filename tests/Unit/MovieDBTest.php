<?php
namespace MovieDb\Tests\Unit;

use MovieDB\Facades\MovieDB;
use MovieDB\Providers\MovieDBServiceProvider;
use Orchestra\Testbench\TestCase;

class BaseTest extends TestCase
{

    public function testConstructor()
    {
        MovieDB::trends();
    }


    protected function getPackageProviders($app)
    {
        return [ MovieDBServiceProvider::class];
    }

}