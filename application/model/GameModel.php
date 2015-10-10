<?php

/**
 * Handles all data manipulation of the admin part
 */
class GameModel
{
    /**
     * @var string
     */
    private static $api_version = '1.0';
    /**
     * @var string
     */
    private static $base_link = 'http://jotihunt.net/api/';
    /**
     * @var array
     */
    private static $allowed_types = array('hint' => 'hint', 'opdracht' => 'opdracht', 'nieuws' => 'nieuws');

    /**
     * @param string $type
     * @param null $id
     * @return string
     */
    public static function buildLink($type, $id = null) {
        $url = self::$base_link . self::$api_version . '/' . self::$allowed_types[$type];
        return $url;
    }
    /**
     * @param $input
     * @return bool
     */
    public static function setInterVal($input = 60)
    {
        $set = array('KEY' => 'UpdateInterval', 'VALUE' => $input);
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->update('settings')->set($set)->where('KEY', 'UpdateInterval');
        if ($query->execute()){
            Log::put('success', 'UpdateSetting', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $set);
            return true;
        } else {
            Log::put('error', 'UpdateSetting', 'Setting UpdateInterval failed updateing', 'failed to update!', Session::get('user_id'), $set);
            return false;
        }
    }

    /**
     * @param string $type
     * @param $updatevalue
     * @return bool
     */
    private static function setLastUpdated($type, $updatevalue) {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->deleteFrom('update_data')->where('id', $type);
        if ($query->execute()){
            Log::put('success', 'LastUpdate', 'Lastupdated Table was cleared', 'Values cleared', Session::get('user_id'), null);
            $values = array(
                'UUID' => null,
                'id' => $type,
                'time' => $updatevalue
            );
            $query = $db->insertInto('update_data', $values);
            if ($query->execute()){
                Log::put('success', 'LastUpdate', 'Update Table was Updated', '--', Session::get('user_id'), $values);
                return true;
            } else {
                Log::put('error', 'LastUpdate', 'Update table failed to update!', '--', Session::get('user_id'), $values);
                return false;
            }
        } else {
            Log::put('error', 'LastUpdate', 'Failed to clear update table', 'Failed to clear update table!', Session::get('user_id'), null);
            return false;
        }
    }
    /**
     * @param $type
     * @return bool
     */
    public static function updateDatabase($type, $id = null){
        $db = DatabaseFactory::getFactory()->fluent();
            if ($type = 'opdracht') {
                $data = json_decode(file_get_contents(self::buildLink($type)), true);
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

                    $sql = "SELECT * FROM opdrachten WHERE UUID = :uuid ";
                    $query = $database->prepare($sql);
                    $query->execute(array(':uuid' => $value['ID']));


                    if ($query->rowCount() == 1) {
                        $query = $db->update('opdrachten')->set($values)->where('UUID', $value['ID']);
                        if ($query->execute()) {
                            Log::put('success', 'updateRowOpdracht', 'Opdracht Update', 'Opdracht geupdate!', Session::get('user_id'), $values);
                        } else {
                            Log::put('error', 'UpdateRowOpdracht', 'Opdracht Update', 'Poging tot Updaten van een nieuwe opdracht is mislukt!', Session::get('user_id'), $values);
                        }
                    } elseif ($query->rowCount() == 0) {
                        $query = $db->insertInto('opdrachten', $values);
                        if ($query->execute()) {
                            Log::put('success', 'insertRowOpdracht', 'Opdracht Toegevoegd', 'Een Nieuwe opdracht beschikbaar!', Session::get('user_id'), $values);
                        } else {
                            Log::put('error', 'insertRowOpdracht', 'Opdracht Toegevoegd', 'Poging tot toevoegen van een nieuwe opdracht is mislukt!', Session::get('user_id'), $values);
                        }
                    }
                    unset($query);
                    unset($sql);

                }
                self::setLastUpdated($type, $data['last_update']);
                unset($data);
            } elseif ($type = 'hint') {
                // temp, it doesnt know how to handle with a hitn yet. no api samples have been realeased.
                Redirect::home();


                //
                $data = json_decode(file_get_contents(self::buildLink($type)), true);
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

                    $sql = "SELECT * FROM hints WHERE UUID = :uuid ";
                    $query = $database->prepare($sql);
                    $query->execute(array(':uuid' => $value['ID']));


                    if ($query->rowCount() > 0) {
                        $query = $db->update('opdrachten')->set($values)->where('UUID', $value['ID']);
                        if ($query->execute()) {
                            Log::put('success', 'updateRowHint', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::put('error', 'UpdateRowHint', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    } elseif ($query->rowCount() == 0) {
                        $query = $db->insertInto('opdrachten', $values);
                        if ($query->execute()) {
                            Log::put('success', 'insertRowHint', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::put('error', 'insertRowHint', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    }
                    unset($query);
                    unset($sql);

                }
                self::setLastUpdated($type, $data['last_update']);
                unset($data);
            } elseif ($type = 'nieuws') {
                $data = json_decode(file_get_contents(self::buildLink($type)), true);
                foreach ($data['data'] as $key => $value) {
                    $values = array(
                        'UUID' => $value['ID'],
                        'title' => $value['titel'],
                        'date' => $value['datum']
                    );

                    $database = DatabaseFactory::getFactory()->getConnection();

                    $sql = "SELECT * FROM nieuws WHERE UUID = :uuid ";
                    $query = $database->prepare($sql);
                    $query->execute(array(':uuid' => $value['ID']));


                    if ($query->rowCount() == 1) {
                        $query = $db->update('nieuws')->set($values)->where('UUID', $value['ID']);
                        if ($query->execute()) {
                            Log::put('success', 'updateRowNieuws', 'Nieuws Geupdate', 'Nieuw nieuws', Session::get('user_id'), $values);
                        } else {
                            Log::put('error', 'UpdateRowNieuws', 'Nieuws gecheckt voor update', 'geen nieuws.', Session::get('user_id'), $values);
                        }
                    } elseif ($query->rowCount() == 0) {
                        $query = $db->insertInto('nieuws', $values);
                        if ($query->execute()) {
                            Log::put('success', 'insertRowNieuws', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        } else {
                            Log::put('error', 'insertRowNieuws', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
                        }
                    }
                    unset($query);
                    unset($sql);

                }
                self::setLastUpdated($type, $data['last_update']);
                unset($data);
                return true;
            } else {

                Log::put('error', 'wrongUse', 'You tried to use a function in the wrong way!', 'Gamemodel::updateDatabase($type);', Session::get('user_id'));
                return false;
            }
    }

    /**
     * @param $id
     * @return boolean|null
     */
    public static function markFinished($id) {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->update('opdrachten')->set('finished', 1)->where('id', $id);
        if ($query->execute()) {
            Log::put('success', 'updateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
        } else {
            Log::put('error', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
        }

    }

    /**
     * @param $id
     * @throws Exception
     */
    public static function unMarkFinished($id) {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->update('opdrachten')->set('finished', 0)->where('id', $id);
        if ($query->execute()) {
            Log::put('success', 'updateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
        } else {
            Log::put('error', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'), $values);
        }

    }

    /**
     * @param $type
     * @param bool|false $latest
     * @param null $updated_since
     * @return bool
     */
    public static function getData3($type, $latest = false, $updated_since = null) {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->from($type)->limit('3')->orderBy('id DESC');
        $result = $query->execute();
        return json_decode(json_encode($result),true);
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
