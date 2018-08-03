<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 02/01/2018
 * Time: 12:04
 */
?>
<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
extract($_REQUEST,EXTR_SKIP);
*/
if(isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
    $auth = 1;
}
if($auth==1){
    echo 'Usuário Logado!';
} else {
    echo 'Você não está logado!<br>';
    echo $auth;
}
?>
