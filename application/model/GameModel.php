<?php

/**
 * Handles all data manipulation of the admin part
 */
class GameModel
{
    /**
     * @var string
     */
    private static $api_version = "1.0";
    /**
     * @var string
     */
    private static $base_link = "http:://jotihunt.net/api/";
    /**
     * @var array
     */
    private static $allowed_types = array("hint" => "hint", "quest" => "opdracht", "news" => "nieuws");

    /**
     * @param $type
     * @param null $id
     * @return string
     */
    private static function buildLink($type, $id = null) {
        $url = self::$base_link . self::$api_version . self::$allowed_types[$type];
        return $url;
    }
    /**
     * @param $input
     * @return bool
     */
    public static function setInterVal($input = 60)
    {
        $set = array('UpdateInterval' => $input);
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->update('settings')->set($set)->where('KEY', 'updateInterval');
        if ($query->execute()){
            Log::log('success', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $set);
        } else {
            Log::log('error', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $set);
        }
        return false;
    }

    /**
     * @param $type
     * @return bool
     */
    public static function updateDatabase($type){
        // pulls the type

        // just do nothing for now.
        return false;
    }

    /**
     * @param $id
     * @return bool
     */
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
