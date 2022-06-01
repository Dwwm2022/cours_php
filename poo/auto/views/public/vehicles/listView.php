<?php ob_start(); //var_dump($categories); ?>
    test ...
<?php
$title = "Liste des véhicules";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/public/template_front.php');
?>
