<?php
    // Start PHP session at the beginning 
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    ini_set("default_charset", "UTF-8");
    mb_internal_encoding("UTF-8");
    iconv_set_encoding("internal_encoding", "UTF-8");
    iconv_set_encoding("output_encoding", "UTF-8");

	
    
    // Create database connection using config file
    include_once("db-config.php");
?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="favicon.png">
        <TITLE>Indian Motorcycle Rally - Changement de moto</TITLE>
    </HEAD>
    <BODY>
        <?php include("menu.php"); 
            // Check If form submitted, change user data into database.
            if (isset($_POST['modifier'])) {
                $id     = $_SESSION["id"];
                $moto    = $_POST['moto'];
                
                
                // Change user data into database
                        $mysqli->set_charset("utf8");
                        $result   = mysqli_query($mysqli, "UPDATE `rally_users` SET `moto` = '$moto' WHERE `rally_users`.`id` = $id;");
                        
                        
                        // check if user data inserted successfully.
                        if ($result) {
                            session_start();
                            $_SESSION["moto"] = $moto;
                            // On redirige vers la page d'envoi du mail de bienvenue
                            header("location: myrally.php");
                            } else {
                            echo "<center><h3>Une erreur est survenue. merci de réessayer plus tard.</center></h3>" . mysqli_error($mysqli);
                        }
                
                
                
                
                
                
                
                
            } else {
            echo "loupé";
            }
        ?>
        <div class="rallybg">
        <br>
            <DIV class="container py-4 bg-primary text-white" style="max-width:600px;">
			<?php 
			echo $id." ".$moto;
			?>
            </DIV>
            
        <br>
        </div>
                <?php include("footer.php"); ?>
    </BODY>
</HTML>
