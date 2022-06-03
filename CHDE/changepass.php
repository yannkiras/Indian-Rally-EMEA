<?php
    // Start PHP session at the beginning 
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    ini_set("default_charset", "UTF-8");
    mb_internal_encoding("UTF-8");
    iconv_set_encoding("internal_encoding", "UTF-8");
    iconv_set_encoding("output_encoding", "UTF-8");
    
    if (isset($_SESSION["email"])) {
        $user = $_SESSION["email"];
    }
    
    if (isset($_GET["user"])) {
        $user = $_GET["user"];
    }
    
    
    
    // Create database connection using config file
    include_once("db-config.php");
?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <TITLE>Indian Motorcycle Rally - Changement de mot de passe</TITLE>
    </HEAD>
    <BODY>
        <?php include("menu.php");?>
        <div class="rallybg">
            <br/>
            <DIV class="container my-4 py-4 bg-primary text-white" style="max-width:600px;">
                
                <?php
                    // Check If form submitted, insert user data into database.
                    if (isset($_POST['changepass'])) {
                        $user = $_POST['disabledemail'];
                        $password = $_POST['password'];
                        $passwordbis = $_POST['passwordbis'];
                        $cryptpass = md5($password);
                        
                        
                        
                        
                        // If passwords don't match, throw error
                        
                        if ($password != $passwordbis) {
                            echo "<div class='bg-primary text-white py-4'><h3><center><strong>Erreur: </strong> Les mots de passe ne correspont pas.</center></h3></div>";
                            } else {
                            
                            
                            
                        // Insert user data into database
                        $mysqli->set_charset("utf8");
                        $result   = mysqli_query($mysqli, "UPDATE `rally_users` SET `password` = '$cryptpass' WHERE `rally_users`.`email` = '$user'");
                        
                        
                        // check if user data inserted successfully.
                        if ($result) {
                            // On redirige vers la page d'envoi du mail de bienvenue
                            session_destroy();
                            echo "<div class='bg-primary text-white py-4'><center><h3>Votre mot de passe a été modifié, merci de vous reconnecter.</center></h3></div>";
                            } else {
                            echo "<div class='bg-primary text-white py-4'><center><h3>Une erreur est survenue. merci de réessayer plus tard.</center></h3>" . mysqli_error($mysqli)."</div>";
                        }
                    }
                }
                
            ?>

            <H4 class="py-2">CHANGER VOTRE MOT DE PASSE</H4>
            <FORM action="changepass.php" method="post" name="changepass" class="needs-validation">
                <LABEL for="disabledemail" class="form-label">Adresse email : <?php echo $user; ?></LABEL>
                <INPUT type="hidden" class="form-control" id="disabledemail" name="disabledemail" value="<?php echo $user; ?>">
                <br>
                <LABEL for="password" class="form-label">Mot de Passe</LABEL>
                <INPUT type="password" class="form-control" id="password" name="password" required/>
                <LABEL for="passwordbis" class="form-label">Répétez le mot de Passe</LABEL>
                <INPUT type="password" class="form-control" id="passwordbis" name="passwordbis" required/>
                <CENTER>
                    <INPUT type="submit" id="changepass" name="changepass" class="btn btn-light btn-lg my-4" value="VALIDER"/>
                </CENTER>
                </FORM>
            </DIV>
            <br>
            
        </div>
        <?php include("footer.php"); ?>
        
    </BODY>
    </HTML>
