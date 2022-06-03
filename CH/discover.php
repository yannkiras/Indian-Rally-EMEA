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
                        <img src="img/rally_carte-france.png" style="max-height:400px; max-width:100%;"/>
                    </div>
                    <div class="col-12 col-lg-8 bg-primary my-auto p-4">
                        <center><h4 class="pb-4 text-white text-start">L&#39;INDIAN MOTORCYCLE RALLY EST UNE INVITATION AU VOYAGE DANS LES RÉGIONS DE FRANCE.</center>
                            
                        </h4>
                        <div class="row">
                            <div class="col-12 col-lg-6 fs-7 text-white text-start">
                                <p class="pb-2">■ AU COURS DE CHACUN DE VOS DÉPLACEMENTS, MARQUEZ UNE ÉTAPE CHEZ L’UN DES 33 CONCESSIONNAIRES
                                INDIAN MOTORCYCLE ET VENEZ À LA RENCONTRE DES IMRG ET D’AUTRES PROPRIÉTAIRES DE INDIAN MOTORCYCLE.</p>
                                <p class="pb-2">■ INSCRIVEZ VOUS GRATUITEMENT SUR CE SITE PUIS ENREGISTREZ VOTRE PARCOURS APRÈS AVOIR FAIT TAMPONNER VOTRE INDIAN MOTORCYCLE RALLY CHEZ CHAQUE CONCESSIONNAIRE.</p>À L’AUTOMNE UN CLASSEMENT SERA ÉTABLI DANS 5
                            CATÉGORIES : SCOUT, CHIEF, SPRINGFIELD-CHIEFTAIN-ROADMASTER, CHALLENGER ET FTR.</div>
                            <div class="col-12 col-lg-6 fs-7 text-start">
                                <p class="pb-2 text-white">CHACUN DES 3 PREMIERS DE CHAQUE CATÉGORIE AYANT COMPTABILISÉ LA PLUS HAUTE MOYENNE
                                KILOMÉTRIQUE AU CUMUL DE CHACUN DE SES DÉPLACEMENTS SERA RÉCOMPENSÉ COMME SUIT :</p>
                                <div class="card text-black bg-light mb-2" style="max-width: 100ev;">
                                    <div class="card-body">
                                        <p class="card-text text-start mx-auto"/>
                                        
                                        <strong>■ 1ER : 600 € DE CHÈQUE CADEAU EN ÉQUIPEMENT ET ACCESSOIRES INDIAN MOTORCYCLE</strong><br>
                                        <strong>■ 2ÈME : 400 € DE CHÈQUE CADEAU EN ÉQUIPEMENT ET ACCESSOIRES INDIAN MOTORCYCLE</strong><br>
                                        <strong>■ 3ÈME : 250 € DE CHÈQUE CADEAU EN ÉQUIPEMENT ET ACCESSOIRES INDIAN MOTORCYCLE</strong><br>
                                        
                                    </p>
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
