<?php

$settings = [
    "settings" => [
        "displayErrorDetails" => true
    ]
];

$container = new Slim\Container($settings);
$app = new \Slim\App($container);


// specify handlers if any
$container["errorHandler"] = new \MyAppNamespace\ErrorHandlers\ErrorHandler($container);
$container["notFoundHandler"] = new \MyAppNamespace\ErrorHandlers\NotAllowedErrorHandler($container);
$container["notAllowedHandler"] = new \MyAppNamespace\ErrorHandlers\NotFoundErrorHandler($container);
