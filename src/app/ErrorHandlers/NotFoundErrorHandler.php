<?php


namespace MyAppNamespace\ErrorHandlers;


use MyAppNamespace\Utils\JsonUtils;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class NotFoundErrorHandler
 * @package MyAppNamespace\ErrorHandlers
 */
class NotFoundErrorHandler
{
    public function __invoke()
    {
        return function(Request $request, Response $response)
        {
            $error = [
                "status" => 0,
                "message" => "Oops! URL not found!",
            ];

            return $response
                ->withStatus(404)
                ->withHeader('Content-Type', 'application/json')
                ->write(JsonUtils::removeNull( json_encode($error)));
        };
    }
}