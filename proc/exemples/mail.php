<?php

$to="adimicool@gmail.com";
$subject = "Stage";
$message = "Les stage débuterons en juin";
$message = wordwrap($message,50);

if(mail($to,$subject,$message)){
    echo"Mail envoyé avec succès";
}else{
    echo"Echec lors de l'envoi";
}
    


?>