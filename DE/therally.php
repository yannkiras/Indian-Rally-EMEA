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
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Indian Motorcycle Rally</title>
</head>
<body>
<?php include("menu.php"); ?>
<!-- Container principal -->
<div class="bg-image py-4 rallybg">
    <div class="container-xxl" style="min-height:600px;">
        <div class="row m-auto py-4">
            <div class="col-12 col-lg-4 my-auto py-2">
                <img src="img/rally_carte.png" style="max-height:400px; max-width:100%;"/>
            </div>
            <div class="col-12 col-lg-8 bg-primary my-auto p-4">
                <center><h4 class="pb-4 text-white text-start">THE INDIAN MOTORCYCLE RALLY 2022</center>

                </h4>
                <div class="row">
                    <div class="col-12 col-lg-6 fs-7 text-white text-start">
                        <p>■ The Rally is open to owners of all Indian Motorcycle models who are also registered with
                            Indian Motorcycle Riders (IMR).</p>
                        <p>■ Each participant is required to register, free of charge, on indianmotorcyclerally.uk</p>
                        <p>■ Each participant will complete travel in the UK & Eire, at their own discretion using their
                            own motorbike between 1st June and 30 November 2022.</p>
                        <p>■ Each participant should register each of their journey's on indianmotorcyclerally.uk
                            providing it includes a stop at an official UK & Eire Indian Motorcycle dealership.</p>
                    </div>
                    <div class="col-12 col-lg-6 fs-7 text-start text-white">
                        <p>■ During each UK & Eire stage, participants should request that their Indian Motorcycle Rally
                            passport is stamped by the Dealerships that they stop at. Each stamp will certify the
                            participants stage. Participants can obtain a Passport from their originating
                            dealership.</p>
                        <p>Each participant should also take a selfie in front of the Indian Motorcycle Rally banner at
                            each dealership that they visist. They can also share their photo on the UK IMRG Facebook
                            Page.</p>
                        <p>■ Before each visit to an Indian Motorcycle dealership, the participant can register in
                            advance and get in touch with their local IMRG to request more info about the locality and
                            places of interest to visit.</p>
                        <p>■ At the end of the Indian Motorcycle Rally 2022 (30 November 2022), a national ranking will
                            be established to reward the winners with the highest number of stages and miles.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>