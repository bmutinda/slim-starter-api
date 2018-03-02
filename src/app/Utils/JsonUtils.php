<?php


namespace MyAppNamespace\Utils;


/**
 * Class JsonUtils
 * @package MyAppNamespace\Utils
 */
abstract class JsonUtils
{
    /**
     * @param $json
     * @return mixed
     */
    public static function removeNull( $json )
    {
        return preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $json);
    }

    /**
     * @param $json
     * @return mixed
     */
    public static function replaceNullWithEmpty( $json )
    {
        return preg_replace('/null/i', "\"\"", $json );
    }
}