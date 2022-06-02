<?php
	// Start PHP session at the beginning 
	session_start();
	
	// Create database connection using config file
	include_once("db-config.php");
	
	if (!isset($_SESSION["email"])) {
		header("location: login.php");
	}
	
	if ($_SESSION["role"] != "admin") {
		header("location: myrally.php");
	}
?>
<!DOCTYPE html>
<html>
	
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Indian Motorcycle Rally - rapport</title>
	</head>
	
	<body>
		<?php include("menu.php"); ?>
        <div class="bg-image p-4 rallybg">
			
			<div class="container">
				
				<h4>NOMBRE DE PARTICIPANTS EN <?php 
					$year = date("Y");
					echo $year;
				?> :
				<?php
					//on établit le nombre de participants
					
					$sql_participants = "SELECT COUNT(id) AS num FROM rally_users WHERE last_connected >= '".$datedebut."' AND last_connected <= '".$datefin."' ";
					
					$result_participants = mysqli_query($mysqli, $sql_participants);
					
					
					while($row = mysqli_fetch_assoc($result_participants))
					{ 
						
						echo $row['num'];
					}
				?>
				<br>
				NOMBRE DE KILOMETRES PARCOURUS :
				<?php
					//on établit la distance totale
					
					$sql = "SELECT SUM(km) AS distance FROM rally_voyages WHERE date >= '".$datedebut."' AND date <= '".$datefin."' ";
					
					$result = mysqli_query($mysqli, $sql);
					
					
					while($row = mysqli_fetch_assoc($result))
					{ 
						
						echo $row['distance']." kms";
					}
				?>
				</h4>
				<br>
				<!-- On crée des onglets -->
				
				
				<nav>
					<div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
						<button class="nav-link active" id="motoliste-tab" data-bs-toggle="tab" data-bs-target="#motoliste" type="button" role="tab" aria-controls="motoliste" aria-selected="true">Liste des Motos</button>
						<button class="nav-link" id="motos-tab" data-bs-toggle="tab" data-bs-target="#motos" type="button" role="tab" aria-controls="motos" aria-selected="true">Motos - étapes</button>
						<button class="nav-link" id="concess-tab" data-bs-toggle="tab" data-bs-target="#concess" type="button" role="tab" aria-controls="concess" aria-selected="false">Concessionnaires</button>
						<button class="nav-link" id="pilotes-tab" data-bs-toggle="tab" data-bs-target="#pilotes" type="button" role="tab" aria-controls="pilotes" aria-selected="false">Pilotes</button>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					
					<!-- Contenu de l'onglet Motos -->
					<div class="tab-pane fade show active" id="motoliste" role="tabpanel" aria-labelledby="motoliste-tab"><br>
						<!-- TABLEAU DES MOTOS UTILISEES -->
						
						<table class="table table-primary table-striped">
							<thead>
								<tr>
									<th scope="col">Moto</th>
									<th scope="col">Nombre de motos inscrites</th>
								</tr>
							</thead>
							<tbody>
								<?php
									//on établit la liste des motos
									
									$sql = "select moto, COUNT(id) as num from rally_users WHERE last_connected >= '".$datedebut."' AND last_connected <= '".$datefin."' and pays = '".$country."'GROUP BY moto ORDER BY num DESC";
									
									$result = mysqli_query($mysqli, $sql);
									
									while($row = mysqli_fetch_assoc($result))
									{ 
										
										echo "<tr><th scope='col'>".$row['moto']."</th><th scope='col'>".$row['num']."</th></tr>";
									}
								?> 
								
								
							</tbody>
						</table>
					</div>
					
					
					<!-- Contenu de l'onglet Etapes -->
					<div class="tab-pane fade" id="motos" role="tabpanel" aria-labelledby="motos-tab"><br>
						<!-- TABLEAU DES ETAPES EFFECTUEES PAR MOTO -->
						
						<table class="table table-primary table-striped">
							<thead>
								<tr>
									<th scope="col">Moto</th>
									<th scope="col">Nombre de voyages</th>
									<th scope="col">Kilométrage Total effectué</th>   
									<th scope="col">Moyenne</th>
								</tr>
							</thead>
							<tbody>
								<?php
									//on établit la liste des motos et des étapes des comptes connectés cette année
									
									$sql = "select moto, COUNT(id) as num, SUM(km) as km, ROUND(SUM(km)/COUNT(id)) as moyenne from rally_users join rally_voyages on rally_voyages.id_pilote=rally_users.id WHERE date >= '".$datedebut."' AND date <= '".$datefin."' AND rally_users.pays = '".$country."'GROUP BY moto ORDER BY COUNT(id) DESC";
									
									$result = mysqli_query($mysqli, $sql);
									
									while($row = mysqli_fetch_assoc($result))
									{ 
										
										echo "<tr><th scope='col'>".$row['moto']."</th><th scope='col'>".$row['num']."</th><th scope='col'>".$row['km']."</th><th scope='col'>".$row['moyenne']."</th></tr>";
									}
								?> 
								
								
							</tbody>
						</table>
					</div>
					
					
					
					<!-- Contenu de l'onglet Concess -->
					
					<div class="tab-pane fade" id="concess" role="tabpanel" aria-labelledby="concess-tab"><br>
						
						<!-- TABLEAU DES CONCESS VISITES -->
						
						<table class="table table-primary table-striped">
							<thead>
								<tr>
									<th scope="col">Concessionnaires</th>
									<th scope="col">Nombre de visites</th>
									<th scope="col">Kilométrage total effectué</th>
									<th scope="col">Moyenne</th>
								</tr>
							</thead>
							<tbody>
								<?php
									//on établit la liste des motos
									
									$sql = "select concess, COUNT(concess) as num, SUM(km) as km, ROUND(SUM(km)/COUNT(concess)) as moyenne from rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE date >= '".$datedebut."' AND date <= '".$datefin."' AND rally_concess.pays = '".$country."' GROUP BY concess ORDER BY num DESC";
									
									$result = mysqli_query($mysqli, $sql);
									
									while($row = mysqli_fetch_assoc($result))
									{ 
										
										echo "<tr><th scope='col'>".$row['concess']."</th><th scope='col'>".$row['num']."</th><th scope='col'>".$row['km']."</th><th scope='col'>".$row['moyenne']."</th></tr>";
									}
								?> 
								
								
							</tbody>
						</table> 
					</div>
					
					
					
					<!-- Contenu de l'onglet Pilotes -->
					
					<div class="tab-pane fade" id="pilotes" role="tabpanel" aria-labelledby="pilotes-tab"><br>
						
						
						<!-- TABLEAU DES PILOTES -->
						
						<table class="table table-primary table-striped">
							<thead>
								<tr>
									<th scope="col">Nom</th>
									<th scope="col">Prénom</th>
									<th scope="col">CP Ville</th>
									<th scope="col">Moto</th>	  
									<th scope="col">Nombre d'étapes visitées</th>
									<th scope="col">Kilométrage Total effectué</th>   
								</tr>
							</thead>
							<tbody>
								<?php
									//on établit la liste des pilotes
									
									$sql = "select nom, prenom, rally_users.cp as cp, rally_users.ville as ville, moto, COUNT(id_voyage) as etapes ,SUM(km) as km FROM rally_users left join rally_voyages on rally_voyages.id_pilote=rally_users.id WHERE date >= '".$datedebut."' AND date <= '".$datefin."'  GROUP BY id ORDER BY nom ASC";
									
									$result = mysqli_query($mysqli, $sql);
									
									while($row = mysqli_fetch_assoc($result))
									{ 
										
										echo "<tr><th scope='col'>".strtoupper($row['nom'])."</th><th scope='col'>".strtoupper($row['prenom'])."</th><th scope='col'>".$row['cp']." ".$row['ville']."</th><th scope='col'>".$row['moto']."</th><th scope='col'><center>".$row['etapes']."</center></th><th scope='col'><center>".$row['km']."</center></th></tr>";
									}
								?> 
								
								
							</tbody>
						</table>
						
						
					</div>
					
					
					
					
					
					
				</div>
				
				
				
				
				
			</div> <!-- END CONTAINER -->
		</div>
		<?php include("footer.php"); ?>
		
	</body>
	
</html>