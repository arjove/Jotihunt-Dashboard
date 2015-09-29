<?php

/**
 * Handles all data manipulation of the admin part
 */
class DataModel
{

    public static function updateLastUpdate($type, $value){


        $db = DatabaseFactory::getFactory()->fluentPDO();
        $query = $db->insertInto('item', $values);
        if($query->execute()) {
            Log::log('success', 'A item was added', $name, Session::get('user_id'));
            return true;
        } else {
            Log::log('error', 'Failed to add a item', $name, Session::get('user_id'));
            return false;
        }

        // just do nothing for now.
        return false;
    }

}
