<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema</title>
<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:login.php');
}
$logado = $_SESSION['login'];
?>
</head>
<body>
<?php
	echo " Bem vindo $logado";
	echo "<br>";
	echo "<button type='button'><a href='sair.php'>Sair</a> </button>";
?>
</body>
</html>