<?php

/**
 * Handles all data manipulation of the admin part
 */
class ScoreModel
{
    private static $api_version = "1.0";
    private static $base_link = "http:://jotihunt.net/rest";
    private static $allowed_types = array("total" => "scorelijst", "specific" => "scorelijst_punten");
    private static $file_type = "json";

    private static function buildLink($type, $id = null) {
        $url = self::$base_link . "/" . self::$api_version . "/" . self::$allowed_types[$type] . "." . self::$file_type;

    }

    public static function updateDatabase($type){
        self::buildLink();

        // just do nothing for now.
        return false;
    }

}
