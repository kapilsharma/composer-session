<?php
namespace MovieDB;

use MovieDB\DataModels\Movie;

Class MovieDB
{
    public function movies()
    {
        return new Movie();
    }

}