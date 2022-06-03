<?php
    // Start PHP session at the beginning 
    session_start();
    
    // Create database connection using config file
    include_once("db-config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <meta charset="UTF-8"/>
        <title>Bienvenue à l'Indian Motorcycle Rally</title>
    </head>
    <body>
        <?php include("menu.php"); ?>
        <!-- Container principal -->
        <div class="rallybg">
            <div class="container text-center my-4 pt-5">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src="img/rally_carte.png" style="max-height:400px; max-width:100%;"/>
                    </div>
                    <div class="bg-primary col-12 col-lg-8 text-center">
                        <h4 class="py-4 text-white">BIENVENUE <?php echo $_SESSION['prenom']; ?> !
                            <br><br>
                            VOTRE INSCRIPTION À L'INDIAN MOTORCYCLE RALLY A BIEN ÉTÉ ENREGISTRÉE
                            
                        </h4>
                        <div class="fs-6 text-white">
                            
                            <p class="pb-4">VOUS RECEVREZ DANS QUELQUES INSTANTS PAR EMAIL LE PASS PARTICIPANT À PRÉSENTER  À VOTRE CONCESSIONNAIRE POUR COLLECTER VOTRE PASSEPORT À FAIRE TAMPONNER LORS DE CHACUNE DE VOS ÉTAPES.</p>
                            <p class="pb-4">VOUS POUVEZ AUSSI TÉLÉCHARGER DIRECTEMENT VOTRE PASS PARTICIPANT ICI<br>
                            <a class="btn btn-light text-primary" href="Pass.pdf">VOTRE PASS PARTICIPANT</a></p>
                            <p class="pb-4">VOUS POUVEZ DÉSORMAIS ENREGISTRER VOTRE PARCOURS SUR LA PAGE 'MON RALLY'</p>
                            <br>
                            <p class="pb-4">BONNE ROUTE !</p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
