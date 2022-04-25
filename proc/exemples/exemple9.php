<?php
//expression régulière
$chaine = "Les expressions régulières sont importantes";
$pattern = "/importantes/i";
if(preg_match($pattern, $chaine)){
    echo "Le mot est trouvé";
}else{
    echo "Il n'existe pas";
}
$email = "leegmail.com";
$pattern2 = "/^[a-z0-9]+@[a-z0-9._-]{2,}\.[a-z]{2,6}$/";
if(preg_match($pattern2,$email)){
    echo "Votre email est valide";
}else{
    echo "Votre email est invalide";
}

?>