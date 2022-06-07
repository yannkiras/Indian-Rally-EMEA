<?php 
// fonction mail();

// Config
$user = $_GET["user"];
$to    = $user;
$from  = "support@indianmotorcyclerally.eu";  // adresse MAIL OVH liée à ton hébergement.


$header = "From:".$from." \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$Subject = "INDIAN MOTORCYCLE RALLY : CHANGEMENT DE MOT DE PASSE";

$mail_Data = "";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";


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
        <span style='color: #ffffff;'>CHANGEZ VOTRE MOT DE PASSE
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
    <span style='font-size: 14pt;'>
      <strong>
        <span style='color: #ffffff;'>AFIN DE CHANGER VOTRE MOT DE PASSE, MERCI DE CLIQUER SUR LE LIEN CI-DESSOUS.</span>
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

    <table border='0' cellpadding='5px' style='border-collapse: collapse; width: 200px; height: 50px; background-color: #ecf0f1; margin-left: auto; margin-right: auto;'>

      <tbody>

        <tr>

          <td style='width: 99.9469%; text-align: center;'>
            <span style='font-size: 18pt;'>
              <a href='https://indianmotorcyclerally.fr/changepass.php?user=".$user."' title='CHANGER MON MOT DE PASSE' target='_blank' rel='noopener'>
                <strong>CHANGER MON MOT DE PASSE</strong>
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
        <span style='color: #ffffff;'>Vous recevez ce mail suite à une demande de changement de mot de passe. Si vous n'en avez pas fait la demande, ne prenez pas ce mail en considération.</span>
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
        <a href='mailto:support@indianmotorcyclerally.eu'>support@indianmotorcyclerally.eu</a>
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

$mail_Data .= "\n";
$mail_Data .= " \n";
$mail_Data .= " \n";


    $retval = mail ($to, $Subject, $mail_Data, $header);

    if ($retval == true)   {header("location: forget.php?returnfrommail=1");}
else { echo " ### CR_Mail=$CR_Mail - Erreur envoi mail \n"; }
?>