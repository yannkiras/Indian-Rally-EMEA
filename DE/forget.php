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
    <title>Indian Motorcycle Rally - Forgotten password</title>
</head>
<body>
<?php include("menu.php"); ?>
<div class="rallybg">
    <br/>
    <div class="container bg-primary text-white py-4" style="max-width:600px;">
        <?php
        // If form submitted, collect email and password from form
        if (isset($_POST['oubli'])) {
            $email = $_POST['email'];


            // Est-ce que l'utilisateur existe ?
            $email_result = mysqli_query($mysqli, "select 'email' from rally_users where email='$email'");
            $user_matched = mysqli_num_rows($email_result);

            // S'il y a une réponse,alors l'utilisateur existe
            if ($user_matched > 0) {
                header("location: forget-mail.php?user=$email");
            } else {
                echo "<br/><br/><h3><center><strong>Error: </strong> the email address '$email'. does not exist in our list.<br>Please provide a valid email address.</center></h3>";
            }
            // message d'erreur si le formulaire a planté.
        }

        //Est-ce que l'on revient depuis l'envoi de l'email ?
        if ($_GET['returnfrommail'] > 0) {

            echo "<br/><br/><h3><center>Instructions on how to change your password have been sent by email. Please follow the instructions in the email.</center></h3>";
        }


        ?>

        <h4 class="py-2">I HAVE FORGOTTEN MY PASSWORD</h4>
        <p class="text-white">Please submit your email address.</p>

        <form action="forget.php" method="post" name="oubli" charset="UTF-8">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required=""/>
            <center>
                <button type="submit" id="oubli" name="oubli" class="btn btn-light btn-lg my-4">CHANGE MY PASSWORD
                </button>
            </center>
        </form>

    </div>
    <div class="container py-4 my-4 bg-primary text-white" style="max-width:600px;">
        <h4 class="py-2">YOU ARE NOT REGISTERED ?</h4>
        <center>
            <a class="btn btn-light btn-lg my-4" href="register.php" role="button">SIGN UP AT</a>
        </center>
    </div>
    <br>
</div>
<?php include("footer.php"); ?>
</body>
</html>
