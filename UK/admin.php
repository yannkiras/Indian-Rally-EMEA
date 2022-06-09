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
    <title>Indian Motorcycle Rally - rapport</title>
</head>

<body>
<?php include("menu.php"); ?>
<div class="bg-image p-4 rallybg">

    <div class="container">

        <div class="row mx-auto">
            <div class="col-6 col-lg-auto mx-auto border-2 border-primary"><a href="../FR/admin.php"><img src="../img/flag_fr.png" class="img-fluid" style="max-width: 150px"></a></div>
            <div class="col-6 col-lg-auto mx-auto"><a href="../CH/admin.php"><img src="../img/flag_ch.png" class="img-fluid" style="max-width: 150px"></a></div>
            <div class="col-6 col-lg-auto mx-auto"><a href="../DE/admin.php"><img src="../img/flag_de.png" class="img-fluid" style="max-width: 150px"></a></div>
            <div class="col-6 col-lg-auto mx-auto"><a href="../AT/admin.php"><img src="../img/flag_at.png" class="img-fluid" style="max-width: 150px"></a></div>
            <div class="col-6 col-lg-auto mx-auto"><a href="../ES/admin.php"><img src="../img/flag_es.png" class="img-fluid" style="max-width: 150px"></a></div>
            <div class="col-6 col-lg-auto mx-auto"><a href="../PT/admin.php"><img src="../img/flag_pt.png" class="img-fluid" style="max-width: 150px"></a></div>
            <div class="col-6 col-lg-auto mx-auto border border-5 border-success"><a href="../UK/admin.php"><img src="../img/flag_uk.png" class="img-fluid" style="max-width: 150px"></a></div>
        </div>
        <br>
        <h4>NOMBRE DE PARTICIPANTS INCRITS EN <?php
            $year = date("Y");
            echo $year;
            ?> :
            <?php
            //on établit le nombre de participants

            $sql_participants = "select COUNT(DISTINCT(id_pilote)) AS num FROM rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE date >= '" . $datedebut . "' AND date <= '" . $datefin . "' AND pays = '" . $country . "'";

            $result_participants = mysqli_query($mysqli, $sql_participants);


            while ($row = mysqli_fetch_assoc($result_participants)) {

                echo $row['num'];
            }
            ?>
            <br>
            NOMBRE DE KILOMETRES PARCOURUS :
            <?php
            //on établit la distance totale

            $sql = "select SUM(km) as distance from rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE rally_voyages.date >= '" . $datedebut . "' AND rally_voyages.date <= '" . $datefin . "' AND rally_concess.pays ='" . $country . "' ORDER BY rally_voyages.date ASC";

            $result = mysqli_query($mysqli, $sql);


            while ($row = mysqli_fetch_assoc($result)) {

                echo $row['distance'] . " kms";
            }
            ?>
        </h4>
        <br>
        <!-- On crée des onglets -->


        <nav>
            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                <button class="nav-link active" id="motoliste-tab" data-bs-toggle="tab" data-bs-target="#motoliste"
                        type="button" role="tab" aria-controls="motoliste" aria-selected="true">Liste des Motos
                </button>
                <button class="nav-link" id="motos-tab" data-bs-toggle="tab" data-bs-target="#motos" type="button"
                        role="tab" aria-controls="motos" aria-selected="true">Motos - étapes
                </button>
                <button class="nav-link" id="concess-tab" data-bs-toggle="tab" data-bs-target="#concess" type="button"
                        role="tab" aria-controls="concess" aria-selected="false">Concessionnaires
                </button>
                <button class="nav-link" id="pilotes-tab" data-bs-toggle="tab" data-bs-target="#pilotes" type="button"
                        role="tab" aria-controls="pilotes" aria-selected="false">Pilotes
                </button>
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

                    $sql = "SELECT rally_users.moto, COUNT(DISTINCT rally_users.id) as num FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays='" . $country . "' AND rally_voyages.date >= '" . $datedebut . "' AND rally_voyages.date <= '" . $datefin . "' GROUP BY rally_users.moto ORDER BY num DESC";
                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr><th scope='col'>" . $row['moto'] . "</th><th scope='col'>" . $row['num'] . "</th></tr>";
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

                    $sql = "SELECT rally_users.moto, COUNT(rally_voyages.id_voyage) AS num, SUM(rally_voyages.km) as km, ROUND(SUM(rally_voyages.km)/COUNT(rally_voyages.id_voyage)) as moyenne FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays='" . $country . "' AND rally_voyages.date >= '" . $datedebut . "' AND rally_voyages.date <= '" . $datefin . "' GROUP BY moto ORDER BY km DESC";

                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr><th scope='col'>" . $row['moto'] . "</th><th scope='col'>" . $row['num'] . "</th><th scope='col'>" . $row['km'] . "</th><th scope='col'>" . $row['moyenne'] . "</th></tr>";
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

                    $sql = "select concess, COUNT(concess) as num, SUM(km) as km, ROUND(SUM(km)/COUNT(concess)) as moyenne from rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE date >= '" . $datedebut . "' AND date <= '" . $datefin . "' AND rally_concess.pays = '" . $country . "' GROUP BY concess ORDER BY num DESC";

                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr><th scope='col'>" . $row['concess'] . "</th><th scope='col'>" . $row['num'] . "</th><th scope='col'>" . $row['km'] . "</th><th scope='col'>" . $row['moyenne'] . "</th></tr>";
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

                    $sql = "SELECT rally_users.nom,rally_users.prenom,rally_users.cp,rally_users.ville,rally_users.moto,count(rally_voyages.id_voyage) AS etapes, SUM(rally_voyages.km) AS km FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays='" . $country . "' AND rally_voyages.date >= '" . $datedebut . "' AND rally_voyages.date <= '" . $datefin . "' GROUP BY rally_users.id ORDER BY km DESC";

                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr><th scope='col'>" . strtoupper($row['nom']) . "</th><th scope='col'>" . strtoupper($row['prenom']) . "</th><th scope='col'>" . $row['cp'] . " " . $row['ville'] . "</th><th scope='col'>" . $row['moto'] . "</th><th scope='col'><center>" . $row['etapes'] . "</center></th><th scope='col'><center>" . $row['km'] . "</center></th></tr>";
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