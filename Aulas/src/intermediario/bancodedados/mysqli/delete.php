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

function remove(String $nome){
    global $mysqli;
    $query = "DELETE FROM Professores WHERE Nome = ?";
    $statement = $mysqli->prepare($query);
    $statement->bind_param("s",$nome);
    $statement->execute();
    $statement->close();
}

$prof = "Marx";

remove($prof);

echo "Professor removido";

?>