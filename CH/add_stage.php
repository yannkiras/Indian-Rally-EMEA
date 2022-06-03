<?php
// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

include("menu.php");

//on récupère les variables trasnmises dnas l'URL : id_pilote, id_concess, concess

$id_pilote = $_GET['id_pilote'];

$id_concess = $_GET['id_concess'];

$concess = $_GET['concess'];



        // Check If form submitted, insert user data into database.
        if (isset($_POST['ajouter'])) {
            $date     = $_POST['date'];
			$depart     = $_POST['depart'];
			$cp_depart    = $_POST['cp_depart'];
			$km     = $_POST['km'];
			

                // on intègre le voyage dans la base
                $result   = mysqli_query($mysqli, "INSERT INTO `rally_voyages` (`id_voyage`, `id_pilote`, `id_concess`, `cp_depart`, `depart`, `date`, `km`) VALUES (NULL, '$id_pilote', '$id_concess', '$cp_depart', '$depart', '$date', '$km');");

                // check if user data inserted successfully.
                if ($result) {
					header("location: myrally.php");
                } else {
                    echo "Une erreur est survenue. Merci de réessayer" . mysqli_error($mysqli);
                }
         
        }

        ?>
