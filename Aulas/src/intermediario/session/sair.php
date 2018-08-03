<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 04/01/2018
 * Time: 16:41
 */

session_start();
unset($_SESSION['login']); // Deleta uma variável da sessão
unset($_SESSION['senha']);
session_destroy(); // Destrói toda sessão
header('location:index.php');

?>