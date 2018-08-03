<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 09/01/2018
 * Time: 10:28
 */

require_once "wideimage/WideImage.php";

$arquivo = 'grande.jpeg';

// Carrega a imagem
$img = WideImage::load($arquivo);

// Redimensiona a imagem para um quadrado de 800x600
$img = $img->resize(800, 600, 'inside');

// Corta um quadrado de 100x100 no centro da imagem
//$img = $img->crop('50% - 50', '50% - 50', 800, 600);

// Salva a imagem em um novo arquivo com 80% de qualidade
$img->saveToFile('pequena.jpg', 90);

// Limpa a imagem da memória
$img->destroy();