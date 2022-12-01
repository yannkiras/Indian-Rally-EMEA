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
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link rel="icon" type="image/png" href="favicon.png">
        <meta charset="UTF-8" />
        <title>Indian Motorcycle Rally</title>
    </head>
    <body>
        <?php include("menu.php"); ?>
        <div class="bg-image p-4 rallybg">
            
            <div class="container text-center py-2">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
                    <div class="col">
                        <img src="img/rally_logo.png" style="max-height:400px; max-width:100%;" />
                    </div>
                    <div class="col my-auto">
                        <a class="btn btn-primary" href="discover.php" role="button">DISCOVER THE RALLY</a>
                        <br/>
                        <p class="fw-bold pt-4 h3"><?php
                            $sql = "select SUM(km) from rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE rally_voyages.date >= '".$datedebut."' AND rally_voyages.date <= '".$datefin."' AND rally_concess.pays ='".$country."' ORDER BY rally_voyages.date ASC";
                            $result = mysqli_query($mysqli, $sql);
                            
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $km = $row['SUM(km)'];
                                if ( $km > 0) {
                                echo $km;
                                } else {
                                echo "0";
                                }
                                echo " MILES<br/>TRAVELLED THIS SEASON";
                            }
                        ?>
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
