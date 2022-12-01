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
                <center><h4 class="pb-4 text-white text-start">L&#39;INDIAN MOTORCYCLE RALLY 2022</center>

                </h4>

                <div class="row">

                    <div class="col-12 col-lg-6 fs-7 text-white text-start">

                        <p>■ Il s’adresse aux propriétaires d’un modèle Indian Motorcycle et inscrits au préalable à
                            Indian Motorcycle Riders.</p>
                        <p>■ Chaque participant s’inscrit ensuite gratuitement sur indianmotorcyclerally.eu</p>
                        <p>■ Chaque participant effectue les déplacements de son choix, à son gré, avec sa moto en
                            Suisse
                            entre le mois de mai et le 30 novembre.</p>
                        <p>■ Chaque participant vient enregistrer chacun de ses déplacements sur
                            indianmotorcyclerally.eu
                            à compter qu’il contient une étape chez un concessionnaire Indian Motorcycle en Suisse.</p>
                        <p>■ Lors de chaque étape chez un concessionnaire Indian Motorcycle en France, le participant
                            fait tamponner son passeport Indian Rally que le concessionnaire lui aura remis au
                            préalable. Ainsi chaque tampon atteste l'étape du participante.</p>
                        <p>Egalement chaque participant se photographie en portrait (selfie) devant le panneau Indian
                            Motorcycle Rally du concessionnaire. Il peut ensuite partager sa photo sur la page Facebook
                            Indian Motorcycle Riders</p>
                    </div>

                    <div class="col-12 col-lg-6 fs-7 text-start">


                        <p class="pb-1 text-white">■ A l’occasion de chaque étape chez un concessionnaire Indian Motorcycle, le
                            participant peut
                            se signaler en amont et rentrer en contact avec l’IMRG local afin de découvrir les sites de
                            la région</p>

                        <p class="pb-2 text-white">UN CLASSEMENT SERA ÉTABLI À LA FIN DU RALLY. CELUI QUI AURA
                            ATTEINT LA PLUS HAUTE MOYENNE DE KILOMÈTRES CUMULU DE CHACUN DE SES DÉPLACEMENTS SERA
                            RÉCOMPENSÉ COMME SUIT :</p>
                        <div class="card text-black bg-light mb-2" style="max-width: 100ev;">
                            <div class="card-body">
                                <p class="card-text text-start mx-auto"/>

                                <strong>■ 1ÈRE PLACE : CHF 500.00 DE CHÈQUE CADEAU SUR DES VÊTEMENTS INDIAN
                                    MOTORCYCLE</strong><br>
                                <strong>■ 2ÈME PLACE : CHF 300.00 DE CHÈQUE CADEAU SUR LES VÊTEMENTS INDIAN
                                    MOTORCYCLE</strong><br>
                                <strong>■ 3ÈME PLACE : CHF 200.00 DE CHÈQUES CADEAUX SUR LES VÊTEMENTS INDIAN
                                    MOTORCYCLE</strong><br>
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