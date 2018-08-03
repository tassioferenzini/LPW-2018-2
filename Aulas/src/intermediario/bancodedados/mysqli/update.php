<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 05/01/2018
 * Time: 11:26
 */

//ini_set('display_errors', 0);

$mysqli= new mysqli("localhost", "root", "root", "aulas");
$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function atualizar(String $nome1, String $nome2){
    global $mysqli;
    $query = "UPDATE Professores SET Nome = ? WHERE Nome = ?";
    $statement = $mysqli->prepare($query);
    $statement->bind_param("ss",$nome1,$nome2);
    $statement->execute();
    $statement->close();
}

$prof1 = "Humberto";
$prof2 = "Marx";

atualizar($prof1, $prof2);

echo "Professor atualizado";

?>