<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 02/01/2018
 * Time: 13:58
 */

ini_set('display_errors', 0);

echo "Booleano <br>";
//False
var_dump((bool) "0");
echo "<br>";
//True
var_dump((bool) "1");

echo "<br> Inteiro <br>";
$a = 1234; // número decimal
echo "$a  <br>";
$a = -123; // um número negativo
echo "$a  <br>";
$a = 0123; // número octal (equivalente a 83 em decimal)
echo "$a  <br>";
$a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
echo "$a  <br>";
$a = 0b11111111; // número binário (equivalente ao 255 decimal)

echo "<br> Ponto Flutuante <br>";
$a = 1.234;
echo "$a  <br>";
$b = 1.2e3;
echo "$b  <br>";
$c = 7E-10;
echo "$c  <br>";

echo "<br> String <br>";
$var= 'beber';
print 'Preciso $var um copo d\'água <br>';
print "Preciso $var um copo d'água <br>";

echo "<br> Array <br>";

$array = [
    "0" => "bar",
    "1" => "foo",
];
echo "$array[1] <br>";
print_r($array);
echo '<br>';

echo "<br> Objeto <br>";
class teste {
    function oi() { echo “oi”; } }
$php = new teste;
$php -> oi();

echo "<br> Manipulação <br>";
$foo = "0";
echo "$foo <br>";
$foo += 2;
echo "$foo <br>";
$foo = $foo + 1.3;
echo "$foo <br>";
$foo = 5 + "10 pequenos porcos";
echo "$foo <br>";
$foo = 5 + " minúsculos porcos";
echo "$foo <br>";


echo "<br> Constante <br>";
define('PROF', 'Tassio Sirqueira');
echo "Seja bem vindo a aula do " . PROF;


echo "<br> NULL e Vazio <br>";

$nulo = NULL;
$vazio = "";
var_dump($nulo);
echo "<br>";
var_dump($vazio);
