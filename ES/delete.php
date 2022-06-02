<?php
// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

//on récupère la variable trasnmises dnas l'URL : id_voyage

$id_voyage = $_GET['id_voyage'];

	

// on supprime le voyage dans la base
$result   = mysqli_query($mysqli, "DELETE FROM `rally_voyages` WHERE `rally_voyages`.`id_voyage` = '$id_voyage';");

// check if user data inserted successfully.
if ($result) {
	header( "Location: myrally.php");
} else {
	echo "Une erreur est survenue. Merci de réessayer" . mysqli_error($mysqli);
}
         
        

        ?>
