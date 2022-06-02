<?php
// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css"
          rel="stylesheet"/>
    <meta charset="UTF-8"/>
    <title>Legal Notice</title>
</head>
<body>
<?php include("menu.php"); ?>
<div class="container">
    <tbody>
    <tr>
        <td class="subheader"
            valign="top"/>
        <td class="subheader">
								<span class="title"
                                      style="font-weight:bold; font-size: 24px;">Legal Notice</span>
        </td>
    </tr>

    <tr>
        <td class="bodytext">
            <p>POLARIS FRANCE<br>
                S.A. au capital de 327 600 euros <br>
                R.C. 67 B 20 <br>
                Siret 606 720 209 00018 <br>
                N° T.V.A. intracommunautaire FR 65 606 720 209 <br>
                <br>
                Directeur de la publication et/ou du responsable de la rédaction : Emmanuel Péan <br>
                <br>
                Siège social : Polaris France - 2270 avenue de Saint-Martin - 74190 Passy France <br>
                email : polaris@polarisfrance.com <br>
                Téléphone : +33 (0)4 50 93 90 23 </p>
            <br>
            <br>
            <p>L'ensemble de ce site relève des législations françaises et internationales sur le droit d'auteur et
                la propriété intellectuelle. Tous les droits de reproduction sont réservés par leurs déposants
                respectifs, y compris pour les documents textuels, iconographiques et photographiques.</p>
            <br>
            <p>Ce site est hébergé sur un serveur loué à la société OVH<br>
                OVH <br>
                2 rue kellermann <br>
                BP 80157 <br>
                59053 ROUBAIX CEDEX 1 <br>
                France <br>
                http://www.ovh.com </p>
        </td>
    </tr>
    </tbody>
</div>
</div>


<?php include("footer.php"); ?>
</body>
</html>