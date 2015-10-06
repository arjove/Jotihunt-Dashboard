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
            return true;
        } else {
            Log::log('error', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $set);
            return false;
        }
    }

    private static function setLastUpdated($type, $updatevalue) {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->deleteFrom('update_data', array('id' , $type));
        if ($query->execute()){
            Log::log('success', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), null);
            $values = array(
                'UUID' => null,
                'id' => $type,
                'time' => $updatevalue
            );
            $query = $db->insertInto('update_data', $values);
            if ($query->execute()){
                Log::log('success', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                return true;
            } else {
                Log::log('error', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                return false;
            }
        } else {
            Log::log('error', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), null);
            return false;
        }
    }
    /**
     * @param $type
     * @return bool
     */
    public static function updateDatabase($type, $id){
        $db = DatabaseFactory::getFactory()->fluent();
        if (!$type) {
            if ($type = 'opdracht') {
                $data = self::buildLink($type);
                foreach ($data['data'] as $key => $value) {
                    $values = array(
                        'UUID' => $value['ID'],
                        'title' => $value['titel'],
                        'start' => $value['datum'],
                        'end' => $value['eindtijd'],
                        'max_points' => $value['maxpunten'],
                        'finished' => false,
                    );

                    $database = DatabaseFactory::getFactory()->getConnection();

                    $sql = "SELECT UUID FROM opdrachten WHERE UUID = :uuid ";
                    $query = $database->prepare($sql);
                    $query->execute(array(':uuid' => $values['id']));


                    if ($query->rowCount() > 0) {
                        $query = $db->update('opdrachten')->set($values)->where('UUID', $values['ID']);
                        if ($query->execute()) {
                            Log::log('success', 'updateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::log('error', 'UpdateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    } elseif ($query->rowCount() == 0) {
                        $query = $db->insertInto('opdrachten', $values);
                        if ($query->execute()) {
                            Log::log('success', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::log('error', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    }
                    unset($query);
                    unset($sql);

                }

            } elseif ($type = 'hint') {
                $data = self::buildLink($type);
                foreach ($data['data'] as $key => $value) {
                    $values = array(
                        'UUID' => $value['ID'],
                        'title' => $value['titel'],
                        'start' => $value['datum'],
                        'end' => $value['eindtijd'],
                        'max_points' => $value['maxpunten'],
                        'finished' => false,
                    );

                    $database = DatabaseFactory::getFactory()->getConnection();

                    $sql = "SELECT UUID FROM opdrachten WHERE UUID = :uuid ";
                    $query = $database->prepare($sql);
                    $query->execute(array(':uuid' => $values['id']));


                    if ($query->rowCount() > 0) {
                        $query = $db->update('opdrachten')->set($values)->where('UUID', $values['ID']);
                        if ($query->execute()) {
                            Log::log('success', 'updateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::log('error', 'UpdateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    } elseif ($query->rowCount() == 0) {
                        $query = $db->insertInto('opdrachten', $values);
                        if ($query->execute()) {
                            Log::log('success', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::log('error', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    }
                    unset($query);
                    unset($sql);

                }

            } elseif ($type = 'nieuws') {
                $data = self::buildLink($type);
                foreach ($data['data'] as $key => $value) {
                    $values = array(
                        'UUID' => $value['ID'],
                        'title' => $value['titel'],
                        'date' => $value['datum']
                    );

                    $database = DatabaseFactory::getFactory()->getConnection();

                    $sql = "SELECT UUID FROM opdrachten WHERE UUID = :uuid ";
                    $query = $database->prepare($sql);
                    $query->execute(array(':uuid' => $values['id']));


                    if ($query->rowCount() > 0) {
                        $query = $db->update('opdrachten')->set($values)->where('UUID', $values['ID']);
                        if ($query->execute()) {
                            Log::log('success', 'updateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::log('error', 'UpdateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    } elseif ($query->rowCount() == 0) {
                        $query = $db->insertInto('opdrachten', $values);
                        if ($query->execute()) {
                            Log::log('success', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::log('error', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    }
                    unset($query);
                    unset($sql);

                }

            }
            self::setLastUpdated($type, $data['last_update']);
        }
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
