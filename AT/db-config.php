<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost     = 'luniversion.mysql.db';
$databaseName     = 'luniversion';
$databaseUsername = 'luniversion';
$databasePassword = '6NYAivrR';


// On trouve l'année en cours pour définir le 1er janvier et le 31 decembre
$year = date("Y");
$datedebut = $year."-01-01";
$datefin = $year."-12-31";
//On définit la date du jour
$today = date("Y-m-d");
// on définit la date de fin du rally
$finrally = $year."-11-30";

//On définit le pays du site
$country = "DE";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$mysqli->set_charset("utf8");
?>
