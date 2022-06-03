<?php ob_start();?>

<div class="container">
    <h2>Echec au cours de paiement</h2>
    <p>Vérifiez vos coordonnées bancaires, Revenez-nous très prochainement!</p>
</div>
<?php 
 echo "
 <script>
    setTimeout(function(){
    window.location.href = 'http://localhost/php/exemples/poo/apps/auto/auto/index.php';
    }, 1000);
 </script>";


 $content = ob_get_clean();
 require_once(dirname(dirname(__DIR__)) . '/public/template_front.php');
 ?>
?>