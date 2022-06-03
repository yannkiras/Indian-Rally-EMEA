<?php
// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

include("menu.php");

//on récupère les variables trasnmises dnas l'URL : id_pilote, id_concess, concess

$id_voyage = $_GET['id_voyage'];



        // Check If form submitted, insert user data into database.
        if (isset($_POST['modifier'])) {
            $date     = $_POST['date'];
			$depart     = $_POST['depart'];
			$cp_depart     = $_POST['cp_depart'];
			$km     = $_POST['km'];
			

                // on intègre le voyage dans la base
                $result   = mysqli_query($mysqli, "UPDATE `rally_voyages` SET `cp_depart` = '$cp_depart', `depart` = '$depart', `date` = '$date', `km` = '$km' WHERE `rally_voyages`.`id_voyage` = $id_voyage;");

                // check if user data inserted successfully.
                if ($result) {
					header("location: myrally.php");
                } else {
                    echo "Une erreur est survenue. Merci de réessayer" . mysqli_error($mysqli);
                }
         
        }

        ?>
