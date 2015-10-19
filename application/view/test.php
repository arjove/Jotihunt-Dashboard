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
echo GameModel::buildLink('opdracht', '560fd08f4f0c70f8157b23c7');
echo '<br>';
//http://jotihunt.net/api/1.0/nieuws/561bff4b1451985617bf9585
$homepage = file_get_contents('http://jotihunt.net/api/1.0/scorelijst');
$latest_opdrachten = GameModel::getLatest('opdracht');
var_dump(json_decode($homepage, true));
//var_dump($latest_opdrachten);
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
