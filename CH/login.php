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
        <link rel="icon" type="image/png" href="favicon.png">
        <title>Connexion</title>
    </head>
    <body class="text-white">
        <?php include("menu.php"); ?>
        <div class="rallybg">
            <br/>
            <div class="container py-4 bg-primary text-white" style="max-width:600px;">
        <?php
            
            // If form submitted, collect email and password from form
            if (isset($_POST['login'])) {
                $email    = $_POST['email'];
                $password = $_POST['password'];
                $cryptpass = md5($password);
                
                // Check if a user exists with given username & password
                $result = mysqli_query($mysqli, "select * from rally_users where email='$email' and password='$cryptpass'");
                
                // Count the number of user/rows returned by query 
                $user_matched = mysqli_num_rows($result);
                
                // Check If user matched/exist, store user email in session and redirect to sample page-1
                if ($user_matched > 0) {
                    
                    $_SESSION["email"] = $email;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $_SESSION["id"] = $row['id'];
                        $_SESSION["prenom"] = $row['prenom'];
                        $_SESSION["nom"] = $row['nom'];
                        $_SESSION["role"] = $row['role'];
                        $_SESSION["moto"] = $row['moto'];
                        
                    }
                    
                    //update last connection date of the user
                    $today = date("Y-m-d");
                    $updatetimer = mysqli_query($mysqli, "UPDATE rally_users SET last_connected ='$today' where email='$email'");
                    
                    header("location: myrally.php");
                    } else {
                    echo "<h3><center>Le nom d'utilisateur ou le mot de passe ne correspondent pas</center></h3>";
                }
            }
            
            
        ?>
        
                <h4 class="py-2">CONNECTEZ-VOUS</h4>
                <h5 class="py-2">VOUS ??TIEZ INSCRIT EN 2021 ?</h4>
                                <form action="login.php" method="post" name="form1" charset="UTF-8">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" required=""/>
                    <label for="password" class="form-label">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" name="password" required=""/>
                    <center>
                        <button type="submit" id="login" name="login" class="btn btn-light btn-lg my-4">CONNEXION</button>
                    </center>
                </form>
                <br/>
                <a href="forget.php" class="text-white">J'ai oubli?? mon mot de passe, je clique ici.</a>
            </div>
            <div class="container my-4 py-4 bg-primary text-white" style="max-width:600px;">
                <h4 class="py-2">VOUS N'??TES PAS INSCRIT ?</h4>
                <center>
                    <a class="btn btn-light btn-lg my-4" href="register.php" role="button">INSCRIVEZ-VOUS</a>
                </center>
            </div>
            <br>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
