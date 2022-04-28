<?php

if(isset($_POST['soumis'])){
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    
    $tab = ['Sofiane' => 'num1', 'Loic' => 'num2'];

    if(isset($tab[$login]) && $tab[$login] == $pass){
        echo "Bonjour M.: $login";
    }else{
        echo "<a href=".$_SERVER['HTTP_REFERER']."> retour </a>";
    }
}
    ////////////ver 2 /////////////////////////////////

//     $tabPass = [
//         ['login' => 'Dupond', 'pass' => 123],
//         ['login' => 'Durand', 'pass' => 456]
//     ];

//     for($i =0; $i < count($tabPass); $i++){
//         if($pass == $tabPass[$i]['pass'] && $login == $tabPass[$i]['login']){
//             echo "Bonjour M.: $login";
//         }else{
//             echo "<a href=".$_SERVER['HTTP_REFERER']."> retour </a>";
//             break;
//         }
//     }
// }

?>
