<?php
	// Start PHP session at the beginning 
	session_start();
	
	// Create database connection using config file
	include_once("db-config.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="bootstrap//js/bootstrap.min.js"></script>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="favicon.png">
		
		<title>Étapes Indian Motorcycle Rally</title>
	</head>
	<body>
		<?php include("menu.php"); ?>
		<div class="rallybg">
			<br>
			<div class="container">
				<h4>LISTE DES ÉTAPES DE L'INDIAN RALLY</h4>
				<br />
				<div class='row row-cols-1 row-cols-md-3'>
					<?php
						
						//on établit la liste des étapes
						
						$sql = "SELECT * FROM rally_concess WHERE rally_concess.pays ='".$country."' ORDER BY rally_concess.concess ASC";
						
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
							<p class='card-text'>".mb_strtoupper($row['adresse'])."<br>
							".$row['cp']." ".$row['ville']."<br>
							".$row['telephone']."</p>
							</div>
							</div>
							</div>
							<!-- END CARD -->";
						}
						
						
						
						
						
						
						
						
						
						
					?>
				</div>
				<!-- END COLUMNS -->
			</div>
		</div>
		<?php include("footer.php"); ?>	
	</body>
</html>