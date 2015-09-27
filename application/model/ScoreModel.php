<?php

/**
 * Handles all data manipulation of the admin part
 */
class GameModel
{
    private static $api_version = "1.0";
    private static $base_link = "http:://jotihunt.net/api/";
    private static $allowed_types = array("score" => "scorelijst", "quest" => "opdracht", "news" => "nieuws");

    private static function buildLink($type, $id = null) {
        $url = self::$base_link . self::$allowed_types;

    }

    public static function updateDatabase($type){
        // pulls the type

        // just do nothing for now.
        return false;
    }

}
