<?php

namespace MyAppNamespace\Controllers;


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
        $movies = [
            [
                "id" => 1,
                "name" =>"Black Panther"
            ],
            [
                "id" => 2,
                "name" => "Terminator 2"
            ]
        ];

        return $this->dispatch( $movies );
    }
}