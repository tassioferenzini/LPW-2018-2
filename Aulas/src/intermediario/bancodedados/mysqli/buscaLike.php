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
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function buscaPorNome(String $nome){
    global $mysqli;
    $texto = "%$nome%";
    $query = "SELECT * FROM Professores WHERE NOME LIKE ?";
    $statement = $mysqli->prepare($query);
    $statement->bind_param("s",$texto);
    $statement->execute();

    foreach ($statement->get_result() as $value) {
        $pessoaArray[] = $value;
    }
    return $pessoaArray;
}

$prof = "T";

$resultado = buscaPorNome($prof);

if(isset($resultado)) {
    foreach ($resultado as $r){
        echo $r['Nome']."<br>";
    }
}
else {
    echo "Nenhum Registro Encontrado";
}

?>