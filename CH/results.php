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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <meta charset="UTF-8"/>
        <title>Indian Motorcyclce Rally</title>
    </head>
    <body>
        <?php include("menu.php"); ?>
        <div>
            
            <!-- Container principal -->
            <div class="pt-5 bg-primary">
                <div class="container text-center text-white pb-5">
                    
                    <h4>MERCI POUR VOTRE PARTICIPATION</h4>
                </div>
                <img class="mx-auto d-block" src="img/rally_results.jpg" style="max-height:400px; max-width:100%;"/>
            </div>
            <!-- Image montagnes -->
            <img class="w-100" src="img/rally_bg-image-dark.png"/>
            <!-- Slogan -->
            <div class="bg-light">
                <div class="container py-3">
                    <div>
                        <img class="mx-auto d-block img-fluid" src="img/rally_results_slogan.jpg"/>
                    </div>
                    <div class="text-center fs7 mx-auto w-75">
                        <p class="fs-7 fw-bold">GRÂCE À VOUS, INDIAN MOTORCYCLE VERSE 5 000€ À LA FONDATION FOCH à destination du service de pneumologie de l’Hôpital Foch, qui soigne les jeunes patients atteints de Mucoviscidose.</p>
                    </div>
                </div>
            </div>
            <!-- Fin Slogan -->
            <!-- Résultats -->
            <div class="container text-center text-primary my-3">
                <h1>Les gagnants de l'édition 2021</h1>
                <br />
                <div class='row row-cols-1 row-cols-md-3'>
                    
                    <!-- BEGIN CARD -->
                    <div class='col mb-4'>
                        <div class='card h-100 bg-primary text-light text-center'>
                            <div class='card-body' style='max-height:10em;'>
                                <h5 class='card-title'>SCOUT</h5>
                                
                            </div>
                            <div class='card-body bg-light border-primary text-primary'>
                                <h6>1er : GALLOUDEC PEREZ CATHERINE</h6>
                                <h6>2ème :CLOUZOT CATHERINE</h6>
                                <h6>3ème : MAZEAU LAURENCE</h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD -->
                    
                    <!-- BEGIN CARD -->
                    <div class='col mb-4'>
                        <div class='card h-100 bg-primary text-light text-center'>
                            <div class='card-body' style='max-height:10em;'>
                                <h5 class='card-title'>SCOUT BOBBER</h5>
                                
                            </div>
                            <div class='card-body bg-light border-primary text-primary'>
                                <h6>1er : SCHIEREN JOHN</h6>
                                <h6>2ème : KRUCZINSKI PRZEMYSLAW</h6>
                                <h6>3ème : GOMY BENJAMIN</h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD -->
                    <!-- BEGIN CARD -->
                    <div class='col mb-4'>
                        <div class='card h-100 bg-primary text-light text-center'>
                            <div class='card-body' style='max-height:10em;'>
                                <h5 class='card-title'>CHIEF - SPRINGFIELD</h5>
                                
                            </div>
                            <div class='card-body bg-light border-primary text-primary'>
                                <h6>1er : BOILEAU EDITH</h6>
                                <h6>2ème : POILVET DOMINIQUE</h6>
                                <h6>3ème : MORAN FERGUS</h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD -->
                    <!-- BEGIN CARD -->
                    <div class='col mb-4'>
                        <div class='card h-100 bg-primary text-light text-center'>
                            <div class='card-body' style='max-height:10em;'>
                                <h5 class='card-title'>CHIEFTAIN - ROADMASTER</h5>
                                
                            </div>
                            <div class='card-body bg-light border-primary text-primary'>
                                <h6>1er : BRICOUT PHILIPPE</h6>
                                <h6>2ème : CLOUZOT BERNARD</h6>
                                <h6>3ème ex-aequo : COURILLON JEAN-JACUES</h6>
                                <h6>3ème ex-aequo : RENAUDEAU VINCENT</h6>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD -->
                    <!-- BEGIN CARD -->
                    <div class='col mb-4'>
                        <div class='card h-100 bg-primary text-light text-center'>
                            <div class='card-body' style='max-height:10em;'>
                                <h5 class='card-title'>FTR</h5>
                                
                            </div>
                            <div class='card-body bg-light border-primary text-primary'>
                                <h6>1er : DEL ROSARIO PATRICK</h6>
                                <h6>2ème : SOUPART GREGORY</h6>
                                <h6>3ème : HIVERT THIERRY</h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD -->
                    <!-- BEGIN CARD -->
                    <div class='col mb-4'>
                        <div class='card h-100 bg-primary text-light text-center'>
                            <div class='card-body' style='max-height:10em;'>
                                <h5 class='card-title'>CHALLENGER</h5>
                                
                            </div>
                            <div class='card-body bg-light border-primary text-primary'>
                                <h6>1er : DOUCET THIERRY</h6>
                                <h6>2ème : PERTUISEL YANN</h6>
                                <h6></h6>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD -->
                    
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
