<?php
/**
 * Created by PhpStorm.
 * User: tassio
 * Date: 09/01/2018
 * Time: 09:49
 */

require_once "PHPlot/phplot/phplot.php";


#Instancia o objeto e setando o tamanho do grafico na tela
$grafico = new PHPlot(800,600);

#Indicamos o títul do gráfico e o título dos dados no eixo X e Y do mesmo
$grafico->SetTitle("Exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");


#Definimos os dados do gráfico
$dados = array(
    array('Janeiro', 10),
    array('Fevereiro', 5),
    array('Março', 4),
    array('Abril', 8),
    array('Maio', 7),
    array('Junho', 5),
);

$grafico->SetDataValues($dados);

#Neste caso, usariamos o gráfico em barras
$grafico->SetPlotType("bars");

#Exibimos o gráfico
$grafico->DrawGraph();