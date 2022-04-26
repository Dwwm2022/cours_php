<?php
echo time()."<br/>";
echo date('d-m-Y/H:i')."<br/>";
echo "La date du jour est :".date('d/m/Y')."<br/>";
$date_semaineP = time() + (7 * 24 * 60 * 60);
echo "Semaine prochaine : ".date('d/m/Y', $date_semaineP);
?>