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
    <title>Welcome to the Indian Motorcycle Rally</title>
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
                <h4 class="py-4 text-white">WELCOME <?php echo $_SESSION['prenom']; ?> !
                    <br><br>
                    YOUR REGISTRATION FOR THE INDIAN MOTORCYCLE RALLY HAS BEEN SUCCESSFULLY COMPLETED

                </h4>
                <div class="fs-6 text-white">

                    <p class="pb-4">YOU WILL RECEIVE AN EMAIL WITH A PASS TO PRESENT TO YOUR DEALER TO COLLECT YOUR
                        OFFICIAL INDIAN MOTORCYCLE RALLY PASSPORT WHICH SHOULD BE STAMPED AT EACH STAGE.</p>
                    <p class="pb-4">YOU CAN ALSO DOWNLOAD YOUR PARTICIPANT PASS HERE<br>
                        <a class="btn btn-light text-primary" href="Pass.pdf">YOUR PARTICIPANT PASS</a></p>
                    <p class="pb-4">YOU CAN NOW REGISTER YOUR ROUTE ON THE 'MY RALLY' PAGE</p>
                    <br>
                    <p class="pb-4">HAVE A SAFE RIDE</p>


                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<?php include("footer.php"); ?>
</body>
</html>
