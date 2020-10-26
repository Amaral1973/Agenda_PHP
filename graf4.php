<?php
    //Avisa onde se encontra a biblioteca PHPLot
    require_once 'phplot/phplot.php';
    //Definir um objeto gráfico, passando o tamanho deste gráfico que vou mostrar
    $graf1 = new PHPlot(600,400);
    //Definir os valores do gráfico em um array com o nome dados, mas com 3 valores mais a string.
    $dados = array(
        array('Jan', 30, 45, 55),
        array('Fev', 5, 6, 8),
        array('Mar', 70, 56, 4),
        array('Abr', 8, 55, 33),
        array('Mai', 36, 43, 11),
        array('Jun', 20, 10, 34),
        array('Jul', 7, 8, 32));
    //Alterar o tipo do gráfico
    $graf1->SetPlotType('bars');
    //Acrescenta os dados no gráfico
    $graf1->SetDataValues($dados);
    //Adicionar o título do gráfico e dos eixos x,y
    $graf1->SetTitle("Grafico de Amostra");
    $graf1->SetXTitle('Eixo X');
    $graf1->SetYTitle('Eixo Y');
    //Criar uma legenda dos 3 valores
    $graf1->SetLegend(array('Engenharia', 'Construcao', 'Eletricidade'));
    //Mostrar o gráfico
    $graf1->DrawGraph();
?>