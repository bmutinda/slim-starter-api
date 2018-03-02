<?php


namespace MyAppNamespace\Models;


/**
 * Class BaseModel
 * @package MyAppNamespace\Models
 */
abstract class BaseModel
{
    /**
     * @return mixed
     */
    abstract public function toJson();
}