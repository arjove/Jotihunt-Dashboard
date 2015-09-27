<?php

/**
 * Handles all data manipulation of the admin part
 */
class GameModel
{
    private static $api_version = "1.0";
    private static $base_link = "http:://jotihunt.net/api/";
    private static $allowed_types = array("hint" => "hint", "quest" => "opdracht", "news" => "nieuws");

    private static function buildLink($type, $id = null) {
        $url = self::$base_link . self::$allowed_types;

    }
    /**
     * @param $input
     * @return bool
     */
    public static function setInterVal($input)
    {
        // just do nothing for now.
        return false;
    }

    public static function updateDatabase($type){
        // pulls the type

        // just do nothing for now.
        return false;
    }

    public static function toggleFinished($id) {
        // get current state, invert and put beck in database.
        return false;
    }

    /**
     * @param $type
     * @param bool|false $latest
     * @param null $updated_since
     * @return bool
     */
    public static function getData($type, $latest = false, $updated_since = null) {

        // just do nothing for now.
        return false;
    }

    /**
     * @param $type
     * @param bool|false $latest
     * @param null $updated_since
     * @return bool
     */
    public function getDataSpecific($type, $latest = false, $updated_since = null)
    {
        // just do nothing for now
        return false;
    }

}
