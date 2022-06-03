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
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
            <meta charset="UTF-8"/>
            <title>Contact</title>
        </head>
        <body class="bg-primary text-white">
        
        
<?php include("menu.php"); 


         $to = "test-octubifxc@srv1.mail-tester.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:support@indianmotorcyclerally \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }



?>


 
            
            <?php include("footer.php"); ?>
        </body>
    </html>
