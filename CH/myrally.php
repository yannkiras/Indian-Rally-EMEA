<?php
// Start PHP session at the beginning
session_start();

// Create database connection using config file
include_once("db-config.php");

if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
            async></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Mon Rally</title>
</head>

<body>
<?php include("menu.php"); ?>
<div class="bg-image p-4 rallybg">
    <div class="container">
        <h3>MON INDIAN MOTORCYCLE RALLY</h3>
        <br/>
        <h4>
            <?php

            //on retrouve l'id du pilote

            $sql2 = "SELECT id FROM `rally_users` WHERE `email`= '" . $_SESSION['email'] . "'";
            $result = mysqli_query($mysqli, $sql2);

            while ($row = mysqli_fetch_assoc($result)) {
                $id_pilote = $row['id'];
                // echo "num??ro pilote = ".$id_pilote;
            }

            // On calcule le nombre kimo??tres parcourus et le nombre d'??tapes et on l'affiche

            $sqlkm = "SELECT SUM(km) AS km, COUNT(id_voyage) AS etapes FROM `rally_voyages` WHERE id_pilote = '" . $id_pilote . "'AND date >= '" . $datedebut . "' AND date <= '" . $datefin . "' ";
            $result = mysqli_query($mysqli, $sqlkm);

            while ($row = mysqli_fetch_assoc($result)) {
                $km = $row['km'];
                $etapes = $row['etapes'];
                if ($km > 0) {
                    echo $km . " KM PARCOURUS CETTE SAISON EN " . $etapes . " ??TAPES.";
                } else {
                    echo "VOUS N'AVEZ PAS ENCORE ENREGISTR?? D'??TAPE";
                }
            }

            ?>
        </h4>
        <h4>
            JE PARTICIPE EN :
            <?php


            echo strtoupper($_SESSION["moto"]) . " ";

            ?>
            <!-- Button trigger modal modify-->
            <a href='#Changemoto' role='button' data-toggle='modal' data-bs-toggle='tooltip' data-bs-placement='top'
               title='Changer de moto'>
                <img src='img/rally_edit-icon-NB.svg' class='img-fluid' style='width:25px;'></a>

            <!-- Modal CHANGER MOTO -->
            <div class='modal fade' id='Changemoto' tabindex='-1' role='dialog' aria-labelledby='ModalChange'
                 aria-hidden='true'>
                <div class='modal-dialog modal-sm' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title text-primary' id='exampleModalLabel'>Changer de moto</h5>
                        </div>
                        <FORM action='change_moto.php?id_user=<?php echo $_SESSION["id"]; ?>' method='post'
                              name='change-moto' charset='UTF-8' class='needs-validation'>
                            <div class='modal-body text-primary fw-bold'>
                                <CENTER>

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

                                </CENTER>
                            </div>
                            <div class='modal-footer'>
                                <INPUT type='submit' id='modifier' name='modifier'
                                       class='btn btn-primary text-light my-4' value='VALIDER'/>
                        </FORM>
                        <button type='button' class='btn btn-primary text-light' data-dismiss='modal'>Annuler</button>

                    </div>
                </div>
            </div>
    </div>
    <!-- Fin Modal -->


    </h4>
    <br/>

    <a class="btn btn-primary text-light" href="Pass.pdf">T??L??CHARGER MON PASS PARTICIPANT</a>
    <br>
    <br>


    <div class='row row-cols-1 row-cols-md-3'> <!-- BEGIN GRID -->


        <?php


        //on ??tablit le roadbook des ??tapes effectu??es

        $sql = "select * from rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE rally_voyages.id_pilote=" . $id_pilote . " AND rally_voyages.date >= '" . $datedebut . "' AND rally_voyages.date <= '" . $datefin . "' AND rally_concess.pays ='" . $country . "' ORDER BY rally_voyages.date ASC";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {


            //begin card etape effectuee
            echo "	
				<div class='col mb-4'>
				<div class='card bg-light border-primary'>
				
				<div class='row g-0'>
				<div class='col-md-4 p-3'>
				<img src='img/stage_" . $row['id_concess'] . ".png' class='card-img-top' alt='stage etape'>
				</div>
				<div class='col-md-7'>
				<div class='card-body text-primary pl-3 fw-bold'>
				<h5 class='card-title'>" . $row['concess'] . "</h5>
				<p class='card-text'>" . mb_strtoupper($row['adresse']) . "<br>
				" . $row['cp'] . " " . $row['ville'] . "<br>
				" . $row['telephone'] . "</p>
				</div>
				</div>
				
				</div>
				<div class='card-body text-white'>
				<div class='row card-text bg-primary text-light p-2 mx-3'>
				<div class='col-md-10'>
				<p>
				Date : " . date('d/m/Y', strtotime($row['date'])) . "<br>
				Ville de d??part : " . $row['depart'] . " (" . $row['cp_depart'] . ")<br>
				Kilom??trage effectu?? : " . $row['km'] . " km
				</p>
				</div>
				<div class='col-md-2'>
				<center>
				<!-- Button trigger modal delete-->
				<a href='#Delete" . $row['id_voyage'] . "' role='button' data-toggle='modal' data-bs-toggle='tooltip' data-bs-placement='top' title='Effacer cette ??tape'>
				<img src='img/rally_delete-icon.svg'class='img-fluid' style='max-width:50px;'></a>
				<!-- Button trigger modal modify-->
				<a href='#Modify" . $row['id_voyage'] . "' role='button' data-toggle='modal' data-bs-toggle='tooltip' data-bs-placement='top' title='Modifier cette ??tape'>
				<img src='img/rally_edit-icon.svg'class='img-fluid' style='max-width:50px;'></a>
				</center>
				</div>
				</div>
				
				
				<!-- Fin Button trigger modal -->
				<!-- Modal EFFACER -->
				<div class='modal fade' id='Delete" . $row['id_voyage'] . "' tabindex='-1' role='dialog' aria-labelledby='Modaldelete' aria-hidden='true'>
				<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
				<h5 class='modal-title text-primary' id='Modaldelete'>Effacer l'??tape vers " . $row['concess'] . " ?</h5>
				</div>
				<div class='modal-body text-primary fw-bold'>
				<CENTER>
				Voulez-vous vraiment effacer cette ??tape ?
				</CENTER>
				</div>
				<div class='modal-footer text-center'>
				
				<a class='btn btn-primary text-light' href='delete.php?id_voyage=" . $row['id_voyage'] . "'>OUI</a>
				
				
				<button type='button' class='btn btn-primary text-light' data-dismiss='modal'>NON</button>
				
				
				
				</div>
				</div>
				</div>
				</div>		
				<!-- Fin Modal -->
				
				<!-- Modal Modifier-->
				<div class='modal fade' id='Modify" . $row['id_voyage'] . "' tabindex='-1' role='dialog' aria-labelledby='ModalModify' aria-hidden='true'>
				<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
				<h5 class='modal-title text-primary' id='exampleModalLabel'>Modifier l'??tape vers " . $row['concess'] . "</h5>
				</div>
				<div class='modal-body text-primary fw-bold'>
				<CENTER>
				<FORM action='edit_stage.php?id_voyage=" . $row['id_voyage'] . "' method='post' name='modify-etape' charset='UTF-8' class='needs-validation'>
				<LABEL for='date' class='form-label'>DATE DE L'??TAPE</LABEL>
				<INPUT type='date' id='date' name='date' class='form-control' value='" . $row['date'] . "' required/>
				<LABEL for='depart' class='form-label'>VILLE DE D??PART</LABEL>
				<INPUT type='text' id='depart' name='depart' class='form-control' value='" . $row['depart'] . "' required/>
				<LABEL for='cp_depart' class='form-label'>CODE POSTAL</LABEL>
				<INPUT type='text' id='cp_depart' name='cp_depart' class='form-control' value='" . $row['cp_depart'] . "' required/>
				<LABEL for='km' class='form-label'>KILOM??TRAGE EFFECTU??</LABEL>
				<INPUT type='text' id='km' name='km' class='form-control' value='" . $row['km'] . "'required/>
				<INPUT type='submit' id='modifier' name='modifier' class='btn btn-primary text-light btn-lg my-4' value='MODIFIER CETTE ??TAPE'/>
				</FORM>
				</CENTER>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-primary text-light' data-dismiss='modal'>Annuler</button>
				
				</div>
				</div>
				</div>
				</div>		
				<!-- Fin Modal -->
				
				
				
				
				
				
				
				
				
				
				
				
				
				</div>
				</div>
				</div>";
            //end card
        }

        // on fait un retour ?? la ligne apr??s les ??tapes effectu??es

        echo "</div><br> <div class='row row-cols-1 row-cols-md-3'>";
        //on ??tablit la liste des ??tapes non effectu??es


        $sql = "SELECT * FROM rally_concess WHERE NOT EXISTS (SELECT * FROM rally_voyages WHERE rally_voyages.id_concess = rally_concess.id AND rally_voyages.id_pilote=" . $id_pilote . " AND rally_voyages.date >= '" . $datedebut . "' AND rally_voyages.date <= '" . $datefin . "') AND rally_concess.pays='" . $country . "' ORDER BY concess ASC";

        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $id_concess = $row['id'];
            $concess = $row['concess'];

            //begin card
            echo "	
				<div class='col mb-4'>
				<div class='card h-100'>
				<div class='card-body bg-primary text-light text-center'>
				<h5 class='card-title'>" . $row['concess'] . "</h5>
				<p class='card-text'>" . mb_strtoupper($row['adresse']) . "<br>
				" . $row['cp'] . " " . $row['ville'] . "<br>
				" . $row['telephone'] . "</p>
				
				<!-- Button trigger modal -->
				<button type='button' class='btn btn-light text-primary' data-toggle='modal' data-target='#Modal" . $id_concess . "'>
				Valider cette ??tape
				</button>
				<!-- Modal -->
				<div class='modal fade' id='Modal" . $id_concess . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog modal-sm' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
				<h5 class='modal-title text-primary' id='exampleModalLabel'>Valider l'??tape vers " . $row['concess'] . "</h5>
				</div>
				<div class='modal-body text-primary fw-bold'>
				<CENTER>
				<FORM action='add_stage.php?id_pilote=" . $id_pilote . "&id_concess=" . $id_concess . "&concess=" . $concess . "' method='post' name='etape' charset='UTF-8' class='needs-validation'>
				<LABEL for='date' class='form-label'>DATE DE L'??TAPE</LABEL>
				<INPUT type='date' id='date' name='date' class='form-control' placeholder='aaaa-mm-jj' required/>
				<LABEL for='depart' class='form-label'>VILLE DE D??PART</LABEL>
				<INPUT type='text' id='depart' name='depart' class='form-control' required/>
				<LABEL for='cp_depart' class='form-label'>CODE POSTAL</LABEL>
				<INPUT type='text' id='cp_depart' name='cp_depart' class='form-control' required/>
				<LABEL for='km' class='form-label'>KILOM??TRAGE EFFECTU??</LABEL>
				<INPUT type='text' id='km' name='km' class='form-control' required/>
				<INPUT type='submit' id='ajouter' name='ajouter' class='btn btn-primary text-light btn-lg my-4' value='VALIDER CETTE ??TAPE'/>
				</FORM>
				</CENTER>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-primary text-light' data-dismiss='modal'>Annuler</button>
				
				</div>
				</div>
				</div>
				</div>		
				<!-- Fin Modal -->
				
				
				
				
				
				</div>
				</div> 
				</div>";
            // end card
        }


        ?>


    </div> <!-- END MASONRY -->
</div> <!-- END CONTAINER -->
</div>
<?php include("footer.php"); ?>

</body>

</html>