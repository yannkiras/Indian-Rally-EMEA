<?php
// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap//js/bootstrap.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Étapes Indian Motorcycle Rally</title>
  </head>
  <body>
    <?php include("menu.php"); ?>
    <br />
    <div class="container">
      <h4>LISTE DES ÉTAPES DE L'INDIAN RALLY</h4>
      <br />
      <div class='row row-cols-1 row-cols-md-3'>
        <?php

                //on établit la liste des étapes

                        $sql = "SELECT * FROM rally_concess ORDER BY rally_concess.id ASC";
                        
                        $result = mysqli_query($mysqli, $sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                         {
                 
                $id_concess=$row['id'];

                //begin card    
                echo"   
				<div class='col mb-4'>
					<div class='card h-100 bg-primary text-light text-center'>
						<div class='card-body' style='max-height:10em;'>
						<h5 class='card-title'>".$row['concess']."</h5>
							<p class='card-text'>".$row['adresse']."<br>
							".$row['cp']." ".$row['ville']."<br>
							".$row['telephone']."</p>
							<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.3341440489935!2d-0.5044845841823256!3d47.48340360447322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480878323fcdec37%3A0x5102586ec950a673!2sIndian%20Motorcycle%20Angers!5e0!3m2!1sfr!2sfr!4v1623139452751!5m2!1sfr!2sfr' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
						</div>
						<div class='card-body bg-light border-primary text-primary'>
							<h6>A visiter dans la région :</h6><br>
							".$row['visiter']."
						</div>
					</div>
				</div>
                        <!-- END CARD -->";
                }
                







                

                ?>
      </div>
      <!-- END COLUMNS -->
    </div>
	<?php include("footer.php"); ?>	
  </body>
</html>