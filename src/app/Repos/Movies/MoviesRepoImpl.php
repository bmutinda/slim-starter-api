<?php


namespace MyAppNamespace\Repos\Movies;


use MyAppNamespace\Models\Movie;

/**
 * Class MoviesRepoImpl
 * @package MyAppNamespace\Repos\Movies
 */
class MoviesRepoImpl extends MoviesRepo
{

    /**
     * @param array $filter
     * @param null $limit
     * @param null $offset
     * @return Movie[]
     */
    public function getAll($filter = [], $limit = null, $offset = null)
    {
        $movies = [];

        $movie1 = new Movie();
        $movie1->setId("1");
        $movie1->setTitle("Black panther");
        $movies[] = $movie1;

        $movie2 = new Movie();
        $movie2->setId("2");
        $movie2->setTitle("Terminator");
        $movies[] = $movie2;

        return $movies;
    }

    /**
     * @param array $filter
     * @return Movie[]
     */
    public function find($filter = [])
    {
        return $this->getAll( [] );
    }

    /**
     * @param $movieId
     * @return Movie
     */
    public function findOne($movieId)
    {
        $movie = new Movie();
        $movie->setId("1");
        $movie->setTitle("Black panther");
        return $movie;
    }

    /**
     * @param array $filter
     * @return integer
     */
    public function count($filter = [])
    {
        return 1;
    }
}