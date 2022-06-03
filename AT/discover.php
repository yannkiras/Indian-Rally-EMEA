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
                    <div class="col-12 col-lg-6 my-auto py-2">
                        <img src="img/rally_carte.png" style="max-height:500px; max-width:100%;"/>
                    </div>
                    <div class="col-12 col-lg-6 bg-primary my-auto p-4">
                        <center><h4 class="pb-4 text-white text-start">THE INDIAN MOTORCYCLE RALLY IS AN INVITATION TO VISIT VARIOUS REGIONS OF THE UK.</center>
                            
                        </h4>
                        <div class="fs-7 text-white text-start">
                            <p class="pb-2">■ REGISTER YOUR VISIT AT EACH OF THE 20 UK & EIRE INDIAN MOTORCYCLE DEALERSHIPS, MEET THEIR IMRG MEMBERS AND INDIAN MOTORCYCLE OWNERS.</p>
                            <p class="pb-2">■ REGISTER FOR FREE ON THE INDIAN MOTORCYCLE RALLY WEBSITE, THEN LOG EACH OF YOUR JOURNEY'S AFTER GETTING YOUR INDIAN MOTORCYCLE RALLY PASSPORT STAMPED AT EACH DEALERSHIP YOU VISIT.</p>
                            <p class="pb-2">IN THE AUTUMN, FINAL RALLY RESULTS WILL BE VERIFIED BY COUNTING THE NUMBER OF STAGES AND THE NUMBER OF MILES COMPLETED BY EACH RIDER.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>
