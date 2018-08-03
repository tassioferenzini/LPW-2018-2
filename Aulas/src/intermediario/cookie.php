<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 04/01/2018
 * Time: 15:53
 */


// Cria um cookie que irá durar três dias
setcookie('idioma', 'pt-BR', (time() + (3 * 24 * 3600)));

setcookie('cor', '#666', (time() + 5));

// Pega o valor do Cookie definido anteriormente:
$valor1 = $_COOKIE['idioma'];
$valor2 = $_COOKIE['cor'];

echo "$valor1";
echo "<br>";
echo "$valor2";