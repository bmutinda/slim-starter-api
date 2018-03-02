<?php


namespace MyAppNamespace\ErrorHandlers;


use MyAppNamespace\Utils\JsonUtils;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class ErrorHandler
 * @package MyAppNamespace\ErrorHandlers
 */
class ErrorHandler
{
    public function __invoke()
    {
        return function(Request $request, Response $response, $exception )
        {
            $error = [
                "status" => 0,
                "message" => "Oops! Server Error occurred!",
                "error" => $exception->getMessage()
            ];

            return $response
                ->withStatus(500)
                ->withHeader('Content-Type', 'application/json')
                ->write( JsonUtils::removeNull( json_encode($error)) );
        };
    }
}