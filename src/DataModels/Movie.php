<?php
namespace MovieDB\DataModels;

class Movie
{
    private const URL = 'https://api.themoviedb.org/3/movie/{movie_id}';

    public function getMovieById( $movieId )
    {
        $response = $this->sendRequest($movieId);
    }
}