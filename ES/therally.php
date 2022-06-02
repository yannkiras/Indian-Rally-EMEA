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
                <center><h4 class="pb-4 text-white text-start">EL INDIAN MOTORCYCLE RALLY 2022</center>

                </h4>
                <div class="row">
                    <div class="col-12 col-lg-6 fs-7 text-white text-start">
                        <p>■ Dirigido a los propietarios cualquier modelo Indian Motorcycle registrados en el Indian
                            Motorcycle Riders.</p>
                        <p>■ Cada participante debe darse de alta de forma gratuita en indianmotorcyclerally.es</p>
                        <p>■ Cada participante realizará los viajes que desee con su propia motocicleta por todo España
                            entre Junio y 30 de Noviembre.</p>
                        <p>■ Siempre que el participante haya pasado por un concesionario Indian Motorcycle de España y
                            sellado su pasaporte, podrá registrar su parada en indianmotorcyclerally.es</p>
                    </div>
                    <div class="col-12 col-lg-6 fs-7 text-start text-white">
                        <p>■ En cada parada visitando un concesionario de España, el participante deberá sellar su
                            pasaporte (obtenido previamente) para certificar su viaje hasta allí.</p>
                        <p>Cada participante también deberá tomarse un selfie en frente del logo Indian Motorcycle Rally
                            del concesionario. Podrá compartir su foto en la página de Facebook Indian Motorcycle
                            Riders </p>
                        <p>■ El participante podrá registrar de forma anticipada su parada en un concesionario Indian
                            Motorcycle y ponerse en contacto con el IMRG local para descubrir lo más destacado de la
                            región.</p>
                        <p>■ Al final del Indian Motorcycle Rally 2022, el 30 de Noviembre de 2022, se establecerá un
                            ránking nacional para recompensar a los ganadores: quienes hayan obtenido mayor número de
                            paradas y kilómetros.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>