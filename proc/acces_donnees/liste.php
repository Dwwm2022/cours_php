<?php
require_once('connect.php');
//Requete
echo"<br/>";
$sql = "SELECT * FROM personne";
//Execution
$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_assoc($result)){
//     echo'<pre>';
//    var_dump($row);
//    echo'</pre>';

echo "Nom: ".$row['nom']." Prénom: ".$row['prenom']." Age: ".$row['age']."<br/>";

}
?>