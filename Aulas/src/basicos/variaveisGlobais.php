<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 02/01/2018
 * Time: 12:47
 */


ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
extract($_REQUEST,EXTR_SKIP);

$a = 5;
$b = 3;
function mostra_valor() {
    #global $a, $b, $soma;
    $soma= $a + $b;
}

mostra_valor();

echo $soma;
 ?>
