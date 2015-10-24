<?php
/**
* Handles all data manipulation of the admin part
*/
class OpdrachtenModel
{
    /**
     * @param $id
     * @return boolean|null
     */
    public static function markFinished($id)
    {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->update('opdrachten')->set('finished', 1)->where('id', $id);
        if ($query->execute()) {
            Log::put('success', 'markFinsished', 'Opdracht ingeleverd!', $id, Session::get('user_id'));
        } else {
            Log::put('error', 'markFinished', 'Failed to mark finished.', $id, Session::get('user_id'));
        }

    }

    /**
     * @param $id
     * @throws Exception
     */
    public static function unMarkFinished($id)
    {
        $db = DatabaseFactory::getFactory()->fluent();
        $query = $db->update('opdrachten')->set('finished', 0)->where('id', $id);
        if ($query->execute()) {
            Log::put('success', 'updateRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'));
        } else {
            Log::put('error', 'insertRow', 'Setting UpdateInterval was updated', 'Update interval was updated', Session::get('user_id'));
        }

    }
}