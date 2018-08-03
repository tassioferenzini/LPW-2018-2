<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 05/01/2018
 * Time: 13:53
 */

//ini_set('display_errors', 0);

try {
$pdo = new PDO('mysql:host=localhost;dbname=aulas', 'root', 'root');
$pdo->exec("set names utf8");
} catch ( PDOException $e ) {
    echo 'Erro ao conectar com o Banco: ' . $e->getMessage();
    exit(1);
}

function inserir(String $nome){
    global $pdo;
    $query = "INSERT INTO Professores (Nome) VALUES (:nome)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(":nome",$nome);
    $statement->execute();
}

$prof = "Marx";

inserir($prof);

echo "Professor inserido";

?>