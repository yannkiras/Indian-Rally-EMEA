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
    <title>Contact</title>
</head>
<body class="bg-primary text-white">


<?php include("menu.php");

// If form submitted, collect email and password from form
if (isset($_POST['contact'])) {

    // fonction mail();

    // Config
    $from = $_POST['email'];
    $to = "support@imrg-emea.com";  // adresse MAIL OVH liée à ton hébergement.

    $header = "From:" . $from . " \r\n";
    $header .= "Cc:info@imrg-emea.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";


    $Subject = "INDIAN MOTORCYCLE RALLY " . $country . " : DEMANDE D'INFOS";

    $mail_Data = "";
    $mail_Data .= " \n";
    $mail_Data .= " \n";
    $mail_Data .= " \n";
    $mail_Data .= " \n";
    $mail_Data .= " \n";


    $mail_Data .= $_POST['message'];

    $mail_Data .= "\n";
    $mail_Data .= " \n";
    $mail_Data .= " \n";


    $retval = mail($to, $Subject, $mail_Data, $header);

    if ($retval == true) {
        echo "<center><h2>Your request has been sent !<br>We will answer you as soon as possible.</h2></center>";
    } else {
        echo " ### retval=$retval - Erreur envoi mail \n";
    }
}

?>
<br/>
<div class="container py-4" style="max-width:600px;">
    <h4 class="py-2">CONTACT</h4>
    <p class="text-white">Please fill in this form with your request.</p>

    <form action="contact.php" method="post" name="contact" charset="UTF-8">
        <label for="email" class="form-label">Your email address</label>
        <input type="email" class="form-control" id="email" name="email" required=""/>
        <label for="message" class="form-label">Your request</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        <center>
            <button type="submit" id="contact" name="contact" class="btn btn-light btn-lg my-4">SEND YOUR REQUEST
            </button>
        </center>
    </form>

</div>


<?php include("footer.php"); ?>
</body>
</html>
