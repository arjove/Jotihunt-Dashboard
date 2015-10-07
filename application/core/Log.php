<?php

/**
 * Log
 * This class handles everything that is done for the logging of a users actions.
 */
class Log {
    /**
     * Get all the log enties that are in the database.
     * @param int $limit
     * @param bool $lastlogin
     * @return array
     */
    public static function getLog($limit = 200, $lastlogin = false) {
        $db = DatabaseFactory::getFactory()->fluent();

        if($lastlogin) {
            $user_last_login = UserModel::getUserLastLoginTimestamp();
            $query = $db->from('log')->limit($limit)->where("ENTRY_ID > :timestamp", array(':timestamp' => $user_last_login))->orderBy('ENTRY_ID DESC'); ;
        } else {
            $query = $db->from('log')->limit($limit);
        }
        $query->execute();
        $data = $query->fetchall();

        return json_decode(json_encode($data), true);
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public static function createTimeLine($limit = 100) {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->from('log')->limit($limit)->orderBy('ENTRY_ID DESC');
        $query->execute();
        $result = $query->fetchAll();

        return json_decode(json_encode($result), true);
    }

    /**
     * Get Activity of a single user.
     * @param int $user_id id of the specific user
     * @return object a single object (the result)
     */
    public function getActivity($user_id) {
       //
        return false;
    }

    /**
     * @param $typeOf
     * @param $type
     * @param $title
     * @param $text
     * @param null $user_id
     * @param null $param
     * @return bool
     */
    public static function put($typeOf, $type, $title, $text, $user_id = null, $param = null) {
        $db = DatabaseFactory::getFactory()->fluent();

        $values = [
            'ENTRY_ID' => time(),
            'typeOf' => $typeOf,
            'type' => $type,
            'title' => $title,
            'text' => $text,
            'user_id' => $user_id,
            'param' => json_encode($param)
        ];

        $query = $db->insertInto('log')->values($values);
        if($query->execute() === true) {
            return true;
        } else {
            Session::error('The Log system failed to log a log message.'.time().' | '.$title);
            return false;
        }

    }
}
