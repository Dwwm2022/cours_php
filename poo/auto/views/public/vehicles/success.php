<?php var_dump($veh); ob_start();?>

<div class="container">
<h2>Confirmation d'achat </h2>
<p>Merci pour votre achat</p> 
<p>Vous recevrez les détails de votre achat par mail</p>
</div>
<?php

$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)) . '/public/template_front.php');
?>