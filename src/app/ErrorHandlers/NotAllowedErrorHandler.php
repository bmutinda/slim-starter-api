<?php


namespace MyAppNamespace\ErrorHandlers;


use MyAppNamespace\Utils\JsonUtils;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class NotAllowedErrorHandler
 * @package MyAppNamespace\ErrorHandlers
 */
class NotAllowedErrorHandler
{
    public function __invoke()
    {
        return function(Request $request, Response $response, $methods = array())
        {
            $error = [
                "status" => 0,
                "message" => "Oops! Method not allowed!",
                "error" => $request->getMethod()
            ];

            return $response
                ->withStatus(405)
                ->withHeader('Content-Type', 'application/json')
                ->withHeader('Allow', implode(', ', $methods))
                ->write( JsonUtils::removeNull( json_encode($error)) );
        };
    }
}