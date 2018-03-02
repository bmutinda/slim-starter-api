<?php

$app->group("/api", function (){

    $this->group("/v1", function (){

        $this->group("/movies", function (){

            // get all movies
            $this->get("/", "\MyAppNamespace\Controllers\MoviesController:getAll");
        });

    });
});