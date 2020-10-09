<?php
    session_start();
    if($_SESSION["status"] !="OK"){
        header('location:index.php');
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Agenda 2.0</title>
        <meta charset = "UTF-8"/>
        <link rel="shortcut icon" href="imagens/icomush.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body>
        <header>
        <div class="col-md-4 col-md-offset-4"><h3>Agenda 2.0 - TDS - SENAI</h3></div>
        <br/><br/>
        </header>
        <nav>
        <hr/>
        <div class="col-xs-8 col-xs-offset-2">
            <div class="col-xs-6 col-xs-offset-0">
            <?php
                include("menu.php");
            ?>
           </div>
           <div class="col-xs-4 col-xs-offset-1">
           <?php
                echo "<span class='glyphicon glyphicon-user' aria-hidden='true'></span>";
                echo $_SESSION["user"];
                echo "<a href='sair.php' style='text-decoration: none; font-weight: bold;'>&nbsp;&nbsp;Sair</a>";
            ?>
            </div>
        </div>
        <br/>
        </nav>
        <section>
        <br/><br/>
        <hr/>
        <?php
            include("conecta.php");
            $sql = mysqli_query($conn, "SELECT * FROM expessoa") or die (mysqli_error($conn));
            echo "<h4>Pessoas Descadastradas</h4>";
            echo "<table class='table table-hover'>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Celular</th>";
                echo "<th>E-mail</th>";
                echo "<th>Tipo</th>";
                echo "<th>Usuário</th>";
                echo "<th>Data</th>";
                echo "<th>Ações</th>";
            echo "</tr>";
            while($pessoa = mysqli_fetch_array($sql)){
            echo "<tr>";
                $id = $pessoa['id'];
                echo "<td>".$pessoa['nome']."</td>";
                echo "<td>".$pessoa['celular']."</td>";
                echo "<td>".$pessoa['email']."</td>";
                echo "<td>".$pessoa['tipo']."</td>";
                echo "<td>".$pessoa['usuario']."</td>";
                echo "<td>".$pessoa['data']."</td>";
                echo "<td>&nbsp;&nbsp;<a href='restaura.php?id=$id'><button type='submit' class='btn btn-success'>Restaurar</button></a></td>";
            echo "</tr>";
            }
            echo "</table>";
            mysqli_close($conn);
        ?>
        </div>
        </section>
        <footer>
        <div style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: DodgerBlue; color: white; text-align: center;">Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>