<?php
    //Avisa onde se encontra a biblioteca PHPLot
    require_once 'phplot/phplot.php';
    //Definir um objeto gráfico
    $graf1 = new PHPlot();
    //Definir os valores do gráfico em um array com o nome dados
    $dados = array(
        array('a', 3),
        array('b', 5),
        array('c', 8),
        array('d', 7),
        array('e', 9),
        array('f', 6),
        array('g', 12));
    //Acrescenta os dados no gráfico
    $graf1->SetDataValues($dados);
    //Desabilitar as descrições de cada eixo
    $graf1->SetXTickLabelPos('none');
    $graf1->SetXTickPos('none');
    //Mostrar o gráfico
    $graf1->DrawGraph();
?>