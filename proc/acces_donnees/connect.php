<?php
    $db = mysqli_connect("localhost","root","");
    mysqli_select_db($db,"bdd");
    if($db){
        echo "Connextion réussie ";
        echo " Info du serveur".mysqli_get_host_info($db);
        // if(mysqli_close($db)){
        //     echo "Déconnexion réussie";
        // }else{
        //     echo "Echec lors de la déconnexion";
        // }
    }else{
        echo "Echec";
        echo'Erreur %d : %s',mysqli_connect_errno(),mysqli_connect_error();
    }

?>