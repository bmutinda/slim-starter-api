<?php

namespace MyAppNamespace\Controllers;


use MyAppNamespace\Models\Movie;
use MyAppNamespace\Repos\Movies\MoviesRepo;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class MoviesController
 * @package MyAppNamespace\Controllers
 */
class MoviesController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function getAll( Request $request, Response $response)
    {
        $movies = MoviesRepo::get()->getAll();

        $moviesJson = [];
        foreach ($movies as $movie){
            array_push( $moviesJson, $movie->toJson());
        }

        return $this->dispatch( $moviesJson );
    }
}