<?php
    //Incluir a classe de conexão ao banco
    include("conecta.php");
    //Avisa onde se encontra a biblioteca PHPLot
    require_once 'phplot/phplot.php';
    //Definir um objeto gráfico, passando o tamanho deste gráfico que vou mostrar
    $graf1 = new PHPlot(600,400);
    //Comando o sql para selecionar os registros
    $sql = mysqli_query($conn, "SELECT tipo, COUNT(tipo) AS quantidade FROM pessoa GROUP BY tipo");
    //Criar o array
    $dados = array();
    while($row = mysqli_fetch_assoc($sql)){
        $dados[] = array($row['tipo'], $row['quantidade']);
    }
    //Alterar o tipo do gráfico
    $graf1->SetPlotType('bars');
    //Acrescenta os dados no gráfico
    $graf1->SetDataValues($dados);
    //Adicionar o título do gráfico e dos eixos x,y
    $graf1->SetTitle("Pessoas");
    $graf1->SetXTitle('Fisica / Juridica');
    $graf1->SetYTitle('Quantidade');
    //Criar uma legenda dos 3 valores
    $graf1->SetLegend(array('Fisica', 'Juridica'));
    //Mostrar o gráfico
    $graf1->DrawGraph();
    mysqli_close($conn);
?>