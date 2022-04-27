<?php
session_start();
$_SESSION['login'] = "Dupond";
$c = 5;

function square(){
    $GLOBALS['c'] = $GLOBALS['c'] * $GLOBALS['c'];
}

square();

echo $c;

echo $_SERVER['REMOTE_ADDR']."<br/>";
echo $_SERVER['PHP_SELF']."<br/>";
echo $_SERVER['REQUEST_METHOD']."<br/>";
//$_ENV
//$_SESSION
echo $_SESSION['login'];
session_unset();
echo $_SESSION['login'];
session_destroy();
?>