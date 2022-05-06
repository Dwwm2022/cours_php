<?php
require_once('../../security/auth.php');
require_once('../../connect.php');
if($base){
    if(isset($_GET['id'])){
        $id = trim(htmlentities(addslashes($_GET['id'])));

        $sql = "DELETE FROM personnes WHERE id_p = ".$id;
        $res = mysqli_query($base, $sql);

        $req = "SELECT image FROM personnes WHERE id_p = ".$id;
        $res2 = mysqli_query($base,$req);
        $person = mysqli_fetch_assoc($res2); 
        if($res2){
            unlink('../../assets/images/'.$person['image']);
            header('location:list_p.php');
        }else{
            echo"Erreur de suppression";
        }
    }
}

?>