<?php
session_start();

// Create database connection using config file
include_once("db-config.php");

// Recipient 
$to = $_SESSION["email"];


// Sender 
$from = "support@indianmotorcyclerally.fr";  // adresse MAIL OVH liée à ton hébergement.
$fromName = 'Indian Motorcycle Rally';

// Email subject 
$subject = 'WELCOME TO THE INDIAN MOTORCYCLE RALLY';

// Attachment file 
$file = "Pass.pdf";

// Email body content 
$htmlContent = " 
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
                    <img src='https://lunivers.eu/rallyemea/" . $country . "/img/rally_logo.png' width='355' alt='INDIAN MOTORCYCLE RALLY'>
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
        <span style='color: #ffffff;'>WELCOME !
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
        <span style='color: #ffffff;'>YOUR REGISTRATION FOR THE INDIAN MOTORCYCLE RALLY HAS BEEN SUCCESSFULLY COMPLETED</span>
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
        <span style='color: #ffffff;'>ENCLOSED IS YOUR PARTICIPANT PASS TO PRESENT TO YOUR DEALER TO COLLECT YOUR OFFICIAL INDIAN MOTORCYCLE PASSPORT WHICH SHOULD BE STAMPED AT EACH OF YOUR STAGES.</span>
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
        <span style='font-size: 14pt;'>YOU CAN NOW REGISTER YOUR ROUTE ON THE 'MY RALLY' PAGE BY FOLLOWING THE LINK BELOW AND LOGGING IN WITH YOUR EMAIL ADDRESS AND PASSWORD.</span>
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
              <a href='https://lunivers.eu/rallyemea/" . $country . "/myrally.php' title='INDIAN MOTORCYCLE RALLY' target='_blank' rel='noopener'>
                <strong>MY RALLY</strong>
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
        <span style='color: #ffffff;'>HAVE A SAFE RIDE !</span>
      </strong>
    </span>
  </div>

  <div align='center'>

    <p style='text-align: center;'>
      <span style='color: #ecf0f1;'>
        <strong>© 2022 Indian Motorcycle International, LLC</strong>
      </span>
    </p>

    <p style='text-align: center;'>
      <strong>
        <span style='color: #ecf0f1;'>You have received this email as you have registered on the indianmotorcyclerally.uk website</span>
        <br>
        <span style='color: #ecf0f1;'>Is this not you? Please contact us at </span> 
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

// Header for sender info 
$headers = "From: $fromName" . " <" . $from . ">";

// Boundary  
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

// Preparing attachment 
if (!empty($file) > 0) {
    if (is_file($file)) {
        $message .= "--{$mime_boundary}\n";
        $fp = @fopen($file, "rb");
        $data = @fread($fp, filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
            "Content-Description: " . basename($file) . "\n" .
            "Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);

// Email sending status 
//echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>";

header("location: welcome.php");

?>