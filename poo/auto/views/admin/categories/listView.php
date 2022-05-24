<?php
ob_start();
//var_dump($categories);
echo"Hello world!";
$content = ob_get_clean();
require_once(dirname(dirname(__DIR__)).'/admin/template_back.php');

