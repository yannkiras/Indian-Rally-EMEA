<?php 
session_start();

// fonction mail();

// Config

$to    = $_SESSION["email"];
$from  = "support@indianmotorcyclerally.fr";  // adresse MAIL OVH liée à ton hébergement.



$headers  = "MIME-Version: 1.0 \n";
$headers .= "Content-Type: multipart/mixed;boundary=".$boundary."\r\n";
$headers .= "From: $from  \n";
$headers .= "Disposition-Notification-To: $from  \n";

// Message de Priorité haute
// -------------------------
$headers .= "X-Priority: 1  \n";
$headers .= "X-MSMail-Priority: High \n";


// *** Laisser tel quel

$JOUR  = date("Y-m-d");
$HEURE = date("H:i");

$Subject = "BIENVENUE À L'INDIAN MOTORCYCLE RALLY";

$mail_Data = "";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";

$mail_Data .= "--".$boundary."\r\n";
$mail_Data .= "Content-type: text/html; charset=utf-8"."\r\n\r\n";

$mail_Data .= "


<div style='background-color: #88162a;'>
<table width='100%' border='0' bgcolor='#88162a' align='center' style='border-collapse: collapse;'>
<tr>
<td>
  <div align='center'>
    <br>

    <table width='100%' height='267' cellspacing='2' cellpadding='2' border='0' bgcolor='White' align='center' style='border-collapse: collapse; width: 100%; height: 450px;'>

      <tbody>

        <tr style='height: 201px;'>

          <td valign='middle' align='center' style='height: 201px;'>

            <h1 align='center'>
              <img moz-do-not-send='true' src='https://indianmotorcyclerally.fr/img/rally_brand.png' alt='logo INDIAN MOTORCYCLE' width='266' height='106'>
              <span style='color: #000000;'> 
                <br>
              </span>
            </h1>

            <h1 align='center'>
              <span style='font-size: 18pt;'>
                <strong>
                  <span style='color: #ffffff;'>
                    <img src='https://indianmotorcyclerally.fr/img/rally_logo.png' width='355' height='249' alt='INDIAN MOTORCYCLE RALLY'>
                  </span>
                </strong>
              </span>
            </h1>

          </td>

        </tr>

      </tbody>

    </table>

  </div>

  <p></p>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>BIENVENUE !
          <br>
        </span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>&nbsp;</span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>VOTRE INSCRIPTION À L'INDIAN MOTORCYCLE RALLY A BIEN ÉTÉ ENREGISTRÉE</span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>&nbsp;</span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <span style='font-size: 14pt;'>
      <strong>
        <span style='color: #ffffff;'>VOUS TROUVEREZ CI-JOINT LE PASS PARTICIPANT À PRÉSENTER À CHAQUE CONCESSIONNAIRE POUR COLLECTER LA stage DE CHACUNE DE VOS ÉTAPES.</span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <span style='font-size: 14pt;'>
      <strong>
        <span style='color: #ffffff;'>&nbsp;</span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <strong>
      <span style='font-size: small; color: #ffffff;'>
        <span style='font-size: 14pt;'>VOUS POUVEZ DÉSORMAIS ENREGISTRER VOTRE PARCOURS SUR LA PAGE 'MON RALLY' EN SUIVANT LE LIEN CI-DESSOUS ET EN VOUS CONNECTANT AVEC VOTRE ADRESSE EMAIL ET VOTRE MOT DE PASSE.</span>
        <br>
      </span>
    </strong>
  </div>

  <div align='center'>
    <strong>
      <span style='font-size: small; color: #ffffff;'>&nbsp;</span>
    </strong>
  </div>

  <div align='center'>

    <table border='0' cellpadding='5px' style='border-collapse: collapse; width: 200px; height: 50px; background-color: #ecf0f1; margin-left: auto; margin-right: auto;'>

      <tbody>

        <tr>

          <td style='width: 99.9469%; text-align: center;'>
            <span style='font-size: 18pt;'>
              <a href='https://indianmotorcyclerally.fr/myrally.php' title='INDIAN MOTORCYCLE RALLY' target='_blank' rel='noopener'>
                <strong>MON RALLY</strong>
              </a>
            </span>
          </td>

        </tr>

      </tbody>

    </table>

  </div>

  <div align='center'>
    <strong>
      <span style='font-size: small; color: #ffffff;'>&nbsp;</span>
    </strong>
  </div>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>BONNE ROUTE !</span>
      </strong>
    </span>
  </div>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>&nbsp;</span>
      </strong>
    </span>
  </div>

  <div align='center'></div>

  <div align='center'>
    <img moz-do-not-send='true' src='https://indianmotorcyclerally.fr/img/rally_slogan.png' alt='' width='393' height='82'>
  </div>

  <div align='center'></div>

  <div align='center'>

    <p style='text-align: center;'>
      <span style='color: #ecf0f1;'>
        <strong>© 2021 Indian Motorcycle International, LLC</strong>
      </span>
    </p>

    <p style='text-align: center;'>
      <strong>
        <span style='color: #ecf0f1;'>Vous recevez ce mail suite à une inscription sur le site indianmotorcyclerally.fr</span>
        <br>
        <span style='color: #ecf0f1;'>Ce n'est pas vous ? Merci de nous contacter à</span> 
        <a href='mailto:support@imrgmotorcyclerally.fr'>support@imrgmotorcyclerally.fr</a>
      </strong>
      <br>
    </p>

  </div>

  <div align='center'>
    <span style='font-size: 18pt;'>
      <strong>
        <span style='color: #ffffff;'>&nbsp;</span>
      </strong>
    </span>
  </div>
</td>
</tr>
</table>
</div>

<p style='text-align: center;'></p>

<p style='text-align: center;'></p>


";

// Pièce jointe 1
$file_name = "passeport.pdf";
if (file_exists($file_name))
{
	$file_type = filetype($file_name);
	$file_size = filesize($file_name);
 
	$handle = fopen($file_name, "r") or die("File ".$file_name."can t be open");
	$content = fread($handle, $file_size);
	$content = chunk_split(base64_encode($content));
	$f = fclose($handle);
 
	$mail_Data .= "--".$boundary."\r\n";
	$mail_Data .= "Content-type:".$file_type.";name=".$file_name."\r\n";
	$mail_Data .= "Content-transfer-encoding:base64"."\r\n\r\n";
	$mail_Data .= $content."\r\n";
}
 


$CR_Mail = TRUE;
$CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);

if ($CR_Mail === FALSE) {
echo " ### CR_Mail=$CR_Mail - Erreur envoi mail
\n"; } else {
header("location: welcome.php");
}
?>