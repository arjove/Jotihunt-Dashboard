<?php
/**
 * Created by PhpStorm.
 * User: arjo
 * Date: 10/10/2015
 * Time: 21:16
 */
echo "<pre>";
echo time();
echo '<br>';
echo GameModel::buildLink('nieuws');
echo '<br>';

$homepage = file_get_contents(GameModel::buildLink('nieuws'));
echo $homepage;
echo "<br>";

if (GameModel::updateDatabase('opdracht')) {
    echo 'success';
} else {
    echo 'false';
}
echo '<br>';
if (GameModel::updateDatabase('nieuws')) {
    echo 'success';
} else {
    echo 'false';
}




























echo "</pre>";

phpinfo();