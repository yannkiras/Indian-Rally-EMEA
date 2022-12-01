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
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Indian Motorcycle Rally</title>
</head>
<body>
<?php include("menu.php"); ?>
<!-- Container principal -->
<div class="bg-image py-4 rallybg">
    <div class="container-xxl" style="min-height:600px;">
        <div class="row m-auto py-4">
            <div class="col-12 col-lg-4 my-auto py-2">
                <img src="img/rally_carte.png" style="max-height:400px; max-width:100%;"/>
            </div>
            <div class="col-12 col-lg-8 bg-primary my-auto p-4">
                <center><h4 class="pb-4 text-white text-start">L&#39;INDIAN MOTORCYCLE RALLY EST UNE INVITATION AU
                        VOYAGE DANS LES RÉGIONS DE SUISSE.</center>

                </h4>

                <div class="row">

                    <div class="row">
                        <div class="col-12 col-lg-6 fs-7 text-white text-start">
                            <p class="pb-2">■ AU COURS DE CHACUN DE VOS DÉPLACEMENTS, MARQUEZ UNE ÉTAPE CHEZ L’UN DES 16
                                CONCESSIONNAIRES
                                INDIAN MOTORCYCLE ET VENEZ À LA RENCONTRE DES IMRG ET D’AUTRES PROPRIÉTAIRES DE INDIAN
                                MOTORCYCLE.</p>

                            <p class="pb-2">■ INSCRIVEZ VOUS GRATUITEMENT SUR CE SITE PUIS ENREGISTREZ VOTRE PARCOURS
                                APRÈS
                                AVOIR FAIT TAMPONNER VOTRE INDIAN MOTORCYCLE RALLY CHEZ CHAQUE CONCESSIONNAIRE.</p>

                        </div>
                        <div class="col-12 col-lg-6 fs-7 text-start">
                            <p class="pb-2 text-white">UN CLASSEMENT SERA ÉTABLI À LA FIN DU RALLY. CELUI QUI AURA
                                ATTEINT LA PLUS HAUTE MOYENNE DE KILOMÈTRES CUMULU DE CHACUN DE SES DÉPLACEMENTS SERA
                                RÉCOMPENSÉ COMME SUIT :</p>
                            <div class="card text-black bg-light mb-2" style="max-width: 100ev;">
                                <div class="card-body">
                                    <p class="card-text text-start mx-auto"/>

                                    <strong>■ 1ÈRE PLACE : CHF 500.00 DE CHÈQUE CADEAU SUR DES VÊTEMENTS INDIAN MOTORCYCLE</strong><br>
                                    <strong>■ 2ÈME PLACE : CHF 300.00 DE CHÈQUE CADEAU SUR LES VÊTEMENTS INDIAN MOTORCYCLE</strong><br>
                                    <strong>■ 3ÈME PLACE : CHF 200.00 DE CHÈQUES CADEAUX SUR LES VÊTEMENTS INDIAN MOTORCYCLE</strong><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
