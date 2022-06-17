<?php// Start PHP session at the beginningsession_start();// Create database connection using config fileinclude_once("db-config.php");?><!DOCTYPE html><html><head>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>    <meta charset="UTF-8"/>    <link rel="icon" type="image/png" href="favicon.png">    <title>Indian Motorcycle Rally</title></head><body><?php include("menu.php"); ?><!-- Container principal --><div class="bg-image py-4 rallybg">    <div class="container-xxl" style="min-height:600px;">        <div class="row m-auto py-4">            <div class="col-12 col-lg-4 my-auto py-2">                <img src="img/rally_carte.png" style="max-height:400px; max-width:100%;"/>            </div>            <div class="col-12 col-lg-8 bg-primary my-auto p-4">                <center><h4 class="pb-4 text-white text-start">DIE INDIAN MOTORCYCLE RALLY 2022</center>                </h4>                <div class="row">                    <div class="col-12 col-lg-6 fs-7 text-white text-start">                        <p>■ Teilnahmeberechtigt sind alle Besitzer/innen eines Indian Motorcycle Modells, die bei                            Indian Motorcycle Riders registriert sind.</p>                        <p>■ Jede/r Teilnehmer/in registriert sich kostenlos auf dieser Website.                            Mit der Teilnahmebestätigung kann sich der/die Teilnehmer/in den original Indian Motorcycle                            Rally Pass bei seinem/ihrem örtlichen Händler abholen.</p>                        <p>■ Jeder Teilnehmer/in reist nach eigenem Belieben mit dem Motorrad durch Deutschland und                            Österreich im Zeitraum vom 1. Juni bis 30. November 2022.                        </p>                        <p>■ Jede/r Teilnehmer/in registriert jede Reise unter "meine Rally“, sofern sie einen Stopp bei                            einem Indian Motorcycle Händler in Deutschland und/oder Österreich beinhaltet.</p>                    </div>                    <div class="col-12 col-lg-6 fs-7 text-start text-white">                        <p>■ Bei jedem Stopp bei einem Indian Motorcycle Händler in Deutschland und/oder Österreich                            erhält der/die Teilnehmer/in einen Stempel im Rally Pass. Jeder Stempel bescheinigt die                            jeweilig gefahrene Etappe.</p>                        <p>Außerdem soll jede/r Teilnehmer/in ein Selfie vor dem Indian Motorcycle Rally Banner beim                            Händler machen. Das Foto kann dann auf der Facebook und/oder Instagram Seite der Indian                            Motorcycle Riders geteilt werden. </p>                        <p>■ Vor jedem Zwischenstopp bei einem Indian Motorcycle Händler kann sich der/die Teilnehmer/in                            anmelden und mit der örtlichen IMRG in Kontakt treten, um gemeinsam die Highlights der                            Region zu entdecken.</p>                        <p>■ Am Ende der Indian Motorcycle Rally 2022 (30. November 2022) wird eine Rangliste für                            Deutschland und Österreich erstellt, um die Gewinner/innen mit den meisten Etappen und                            Kilometern zu küren.</p>                    </div>                </div>            </div>        </div>    </div></div><?php include("footer.php"); ?></body></html>