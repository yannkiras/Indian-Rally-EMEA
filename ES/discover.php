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
                <center><h4 class="pb-4 text-white text-uppercase text-start">El INDIAN MOTORCYCLE RALLY es una
                        invitación a descubrir las regiones de España.</center>

                </h4>
                <div class="fs-7 text-white text-start">
                    <p class="pb-2">■ MARCA TU PARADA EN CADA UNO DE NUESTROS 17 CONCESIONARIOS EN ESPAÑA, CONOCE OTROS
                        IMRGs Y PROPIETARIOS DE INDIAN MOTORCYCLE.</p>
                    <p class="pb-2">■ INSCRÍBETE GRATUITAMENTE EN ESTA PÁGINA Y REGISTRA TU VIAJE TRAS OBTENER EL SELLO
                        EN TU PASAPORTE EN CADA CONCESIONARIO</p>
                    <p class="pb-2">EN OTOÑO PUBLICAREMOS EL RÁNKING FINAL CON EL NÚMERO TOTAL DE PARADAS Y KILÓMETROS
                        COMPLETADOS.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
