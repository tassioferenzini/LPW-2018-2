<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 04/01/2018
 * Time: 17:32
 */

function inverse($x) {
    if (!$x) {
        throw new Exception(' Divisão por zero.');
    }
    return 1/$x;
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo '<br> Exceção capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "<br> Primeiro finaly.\n";
}