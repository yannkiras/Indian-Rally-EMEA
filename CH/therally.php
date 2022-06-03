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
                                <p>■ Chaque participant s’inscrit ensuite gratuitement sur indianmotorcyclerally.fr</p>
                                <p>■ Chaque participant effectue les déplacements de son choix, à son gré, avec sa moto en France
                                entre le mois de mai et le 30 novembre.</p>
                                <p>■ Chaque participant vient enregistrer chacun de ses déplacements sur indianmotorcyclerally.fr
                                à compter qu’il contient une étape chez un concessionnaire Indian Motorcycle en France.</p>
                                <p>■ Lors de chaque étape chez un concessionnaire Indian Motorcycle en France, le participant fait tamponner son passeport Indian Rally que le concessionnaire lui aura remis au préalable. Ainsi chaque tampon atteste l'étape du participante.</p>
                                <p>Egalement chaque participant se photographie en portrait (selfie) devant le panneau Indian Motorcycle Rally du concessionnaire. Il peut ensuite partager sa photo sur la page Facebook Indian Motorcycle Riders</p>
                            </div>
                            <div class="col-12 col-lg-6 fs-7 text-start">
                                <p class="pb-1 text-white">■ A l’occasion de chaque étape chez un concessionnaire Indian Motorcycle, le participant peut
                                se signaler en amont et rentrer en contact avec l’IMRG local afin de découvrir les sites de la région</p>
                                <p class="pb-1 text-white">■ Au terme du Indian Motorcycle Rally 2022 (30 novembre 2022), un classement national
                                est établi dans 5 catégories : Scout, Chief, Springfield-Chieftain-Roadmaster, Challenger et FTR.</p>
                                <p class="pb-1 text-white">■ Chacun des 3 premiers de chaque catégorie ayant comptabilisé la plus haute moyenne
                                kilométrique au cumul de chacun de ses déplacements sera récompensé comme suit :</p>
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