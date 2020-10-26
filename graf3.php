<?php
    //Avisa onde se encontra a biblioteca PHPLot
    require_once 'phplot/phplot.php';
    //Definir um objeto gráfico, passando o tamanho deste gráfico que vou mostrar
    $graf1 = new PHPlot(600,400);
    //Definir os valores do gráfico em um array com o nome dados
    $dados = array(
        array('a', 3),
        array('b', 5),
        array('c', 8),
        array('d', 7),
        array('e', 9),
        array('f', 6),
        array('g', 12));
    //Alterar o tipo do gráfico
    $graf1->SetPlotType('bars');
    //Acrescenta os dados no gráfico
    $graf1->SetDataValues($dados);
    //Adicionar o título do gráfico e dos eixos x,y
    $graf1->SetTitle("Grafico de Amostra");
    $graf1->SetXTitle('Eixo X');
    $graf1->SetYTitle('Eixo Y');
    //Mostrar o gráfico
    $graf1->DrawGraph();
?>