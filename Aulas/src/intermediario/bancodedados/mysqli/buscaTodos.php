<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 05/01/2018
 * Time: 11:26
 */

ini_set('display_errors', 0);

$mysqli= new mysqli("localhost", "root", "root", "aulas");
$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (". $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit(1);
}

function busca()
{
    global $mysqli;
    $query = "SELECT * FROM Professores";
    $result = $mysqli->query($query);
    if($result){
        return $result;
    } else {
        return NULL;
    }
}

$retorno = busca();
if(isset($retorno)) {
    foreach ($retorno as $r){
        echo $r["Nome"]."<br>";
    }
}
else {
echo "Nenhum Registro Encontrado";
}

?>