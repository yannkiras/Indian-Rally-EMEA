<?php
// Start PHP session at the beginning
session_start();
header('Content-Type: text/html; charset=utf-8');
ini_set("default_charset", "UTF-8");
mb_internal_encoding("UTF-8");
iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "UTF-8");

if (isset($_SESSION["email"])) {
    header("location: myrally.php");

}

// Create database connection using config file
include_once("db-config.php");
?>
<!DOCTYPE html>
<HTML>
<HEAD>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png">
    <TITLE>Indian Motorcycle Rally - Inscrivez-vous</TITLE>
</HEAD>
<BODY>
<?php
include("menu.php");
?>
<div class="rallybg">
    <br>
    <DIV class="container py-4 bg-primary text-white" style="max-width:600px;"
    <?php
    // Check If form submitted, insert user data into database.
    if (isset($_POST['register'])) {
        $nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
        $prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
        $adresse = mysqli_real_escape_string($mysqli, $_POST['adresse']);
        $cp = $_POST['cp'];
        $ville = mysqli_real_escape_string($mysqli, $_POST['ville']);
        $moto = $_POST['moto'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordbis = $_POST['passwordbis'];
        $cryptpass = md5($password);
        $today = date("Y-m-d");


        // If passwords don't match, throw error

        if ($password != $passwordbis) {
            echo "<br/><br/><h3><center><strong>Erreur: </strong> Les mots de passe ne correspont pas.</center></h3>";
        } else {


            // If email already exists, throw error
            $email_result = mysqli_query($mysqli, "select 'email' from rally_users where email='$email'");


            // Count the number of row matched
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><h3><center><strong>Erreur: </strong> Un utilisateur existe d??j?? pour l'adresse email '$email'.<br>Merci d'en utiliser une nouvelle.</center></h3>";
            } else {
                // Insert user data into database
                $mysqli->set_charset("utf8");
                $result = mysqli_query($mysqli, "INSERT INTO rally_users(nom,prenom,adresse,cp,ville,pays,moto,email,password,last_connected) VALUES('$nom','$prenom','$adresse','$cp','$ville','$country','$moto','$email','$cryptpass','$today')");


                // check if user data inserted successfully.
                if ($result) {
                    session_start();
                    $_SESSION["email"] = $email;
                    $_SESSION["prenom"] = $prenom;
                    $_SESSION["nom"] = $nom;
                    $_SESSION["moto"] = $moto;
                    // On redirige vers la page d'envoi du mail de bienvenue
                    header("location: mail-inscription.php");
                } else {
                    echo "<center><h3>Une erreur est survenue. merci de r??essayer plus tard.</center></h3>" . mysqli_error($mysqli);
                }
            }
        }
    }
    ?>

    <H4 class="py-2">INSCRIVEZ-VOUS</H4>
    <FORM action="register.php" method="post" name="registerform" class="needs-validation">
        <LABEL for="nom" class="form-label">Nom</LABEL>
        <INPUT type="text" id="nom" name="nom" class="form-control" required/>
        <LABEL for="prenom" class="form-label">Pr??nom</LABEL>
        <INPUT type="text" id="prenom" name="prenom" class="form-control" required/>
        <LABEL cfor="adresse" lass="form-label">Adresse</LABEL>
        <INPUT type="text" id="adresse" name="adresse" class="form-control" required/>
        <LABEL for="cp" class="form-label">Code Postal</LABEL>
        <INPUT type="text" id="cp" name="cp" class="form-control" required/>
        <LABEL for="ville" class="form-label">Ville</LABEL>
        <INPUT type="text" id="ville" name="ville" class="form-control" required/>
        <LABEL ofr="moto" class="form-label">Moto</LABEL>
        <SELECT id="moto" name="moto" class="form-select" required>
            <OPTION disabled value="" selected hidden>S??lectionnez votre Moto</OPTION>
            <OPTION value="Challenger">Challenger</OPTION>
            <OPTION value="Chief">Chief</OPTION>
            <OPTION value="Chief Classic">Chief Classic</OPTION>
            <OPTION value="Chief Dark Horse">Chief Dark Horse</OPTION>
            <OPTION value="Chief Vintage">Chief Vintage</OPTION>
            <OPTION value="Chieftain">Chieftain</OPTION>
            <OPTION value="Chieftain Dark Horse">Chieftain Dark Horse</OPTION>
            <OPTION value="FTR 1200">FTR 1200</OPTION>
            <OPTION value="FTR 1200 S">FTR 1200 S</OPTION>
            <OPTION value="FTR Carbon">FTR Carbon</OPTION>
            <OPTION value="FTR Championship">FTR Championship</OPTION>
            <OPTION value="FTR Rally">FTR Rally</OPTION>
            <OPTION value="Model 1920 to 1960">Model 1920 to 1960</OPTION>
            <OPTION value="Model 1960 to 2013">Model 1960 to 2013</OPTION>
            <OPTION value="Pursuit">Pursuit</OPTION>
            <OPTION value="Roadmaster">Roadmaster</OPTION>
            <OPTION value="Scout">Scout</OPTION>
            <OPTION value="Scout Bobber">Scout Bobber</OPTION>
            <OPTION value="Scout Bobber Sixty">Scout Bobber Sixty</OPTION>
            <OPTION value="Scout Sixty">Scout Sixty</OPTION>
            <OPTION value="Scout Rogue">Scout Rogue</OPTION>
            <OPTION value="Springfield">Springfield</OPTION>
            <OPTION value="Springfield">Super Chief</OPTION>
            <OPTION value="Victory">Victory</OPTION>
        </SELECT>
        <LABEL for="email" class="form-label">Adresse email</LABEL>
        <INPUT type="email" class="form-control" id="email" name="email" required/>
        <DIV id="emailHelp" class="form-text text-white pb-3">Cette adresse vous servira d'identifiant de connexion.
        </DIV>
        <LABEL for="password" class="form-label">Mot de Passe</LABEL>
        <INPUT type="password" class="form-control" id="password" name="password" required/>
        <LABEL for="passwordbis" class="form-label">R??p??tez le mot de Passe</LABEL>
        <INPUT type="password" class="form-control" id="passwordbis" name="passwordbis" required/>
        <CENTER>
            <br>En vous enregistrant, vous acceptez le traitement de vos donn??es conform??ment ?? notre <a
                    href="https://www.polaris.com/en-us/privacy/" target="_blank" class="text-light">politique de confidentialit??</a> <br>
            <INPUT type="submit" id="register" name="register" class="btn btn-light btn-lg my-4"
                   value="ENREGISTREMENT"/>
        </CENTER>
    </FORM>
</DIV>

<DIV class="container my-4 ??py-4 text-white bg-primary text-white" style="max-width:600px;">
    <H4 class="py-2">VOUS ??TES DEJA INSCRIT ?</H4>
    <CENTER>
        <A class="btn btn-light btn-lg my-4" href="login.php" role="button">CONNECTEZ-VOUS</A>
    </CENTER>
</DIV>
<br>
</div>
<?php include("footer.php"); ?>
</BODY>
</HTML>
