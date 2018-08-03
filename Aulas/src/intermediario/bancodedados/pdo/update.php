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

function atualizar(String $nome1, String $nome2){
    global $pdo;
    $query = "UPDATE Professores SET Nome = :nome2 WHERE Nome = :nome1";
    $statement = $pdo->prepare($query);
    $statement->bindValue(":nome1",$nome1);
    $statement->bindValue(":nome2", $nome2);
    $statement->execute();
    $statement->close();
}

$prof1 = "Humberto";
$prof2 = "Marx";

atualizar($prof1, $prof2);

echo "Professor atualizado";

?>