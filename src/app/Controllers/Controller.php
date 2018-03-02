<?php

namespace MyAppNamespace\Controllers;

use MyAppNamespace\Utils\JsonUtils;
use Slim\Container;


/**
 * Class Controller
 * @package MyAppNamespace\Controllers
 */
abstract class Controller
{
    /**
     * @var Container
     */
    protected $container;

    function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __get($name)
    {
        if ( isset( $this->container->$name )){
            return $this->container->$name;
        }
    }


    public function dispatch( $data = array( ))
    {
        $encodingOptions = 0;
        $json = json_encode($data, $encodingOptions);
        return $this->response
            ->withStatus(200)
            ->withHeader('Content-Type', 'application/json')
            ->write(JsonUtils::removeNull($json));
    }
}