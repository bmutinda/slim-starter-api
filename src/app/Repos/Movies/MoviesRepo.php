<?php


namespace MyAppNamespace\Repos\Movies;

use MyAppNamespace\Models\Movie;

/**
 * Class MoviesRepo
 * @package MyAppNamespace\Repos\Movies
 */
abstract class MoviesRepo
{
    private static $instance;

    /**
     * @return MoviesRepo
     */
    public static function get()
    {
        if ( static::$instance == null ){
            static::$instance = new MoviesRepoImpl();
        }
        return static::$instance;
    }

    /**
     * @param array $filter
     * @param null $limit
     * @param null $offset
     * @return Movie[]
     */
    abstract public function getAll( $filter = [], $limit = null, $offset = null);

    /**
     * @param array $filter
     * @return Movie[]
     */
    abstract public function find( $filter = [] );

    /**
     * @param $movieId
     * @return Movie
     */
    abstract public function findOne( $movieId );

    /**
     * @param array $filter
     * @return integer
     */
    abstract public function count( $filter = [] );
}