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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div><h4>Agenda 2.0 - TDS - SENAI</h4></div>
            <hr/>
            <?php
                echo $_SESSION["user"];
                echo "<a href='sair.php' style='text-decoration: none; font-weight: bold;'>&nbsp;&nbsp;Sair</a>";
            ?>
        </header>
        <nav>
            <hr/>
            <?php
                include("menu.php");
            ?>
            <hr/>
        </nav>
        <section>
            <h4>Pesquisa de Nome</h4>
            <br/>
            <?php
                include("conecta.php");
                $nome = $_POST['procura'];
                $sql = mysqli_query($conn, "SELECT * FROM pessoa WHERE nome LIKE '%".$nome."%'");
                echo "<table class='table table-hover'>";
                echo "<tr>";
                    echo "<th>Nome</th>";
                    echo "<th>Celular</th>";
                    echo "<th>E-mail</th>";
                    echo "<th>tipo</th>";
                    echo "<th>Ações</th>";
                echo "</tr>";
                while($pessoa = mysqli_fetch_array($sql)){
                    echo "<tr>";
                        $id = $pessoa['id'];
                        echo "<td>".$pessoa['nome']."</td>";
                        echo "<td>".$pessoa['celular']."</td>";
                        echo "<td>".$pessoa['email']."</td>";
                        echo "<td>".$pessoa['tipo']."</td>";
                        echo "<td><a href='verpessoa.php?id=$id'><button type='submit' class='btn btn-primary'>Ver</button></a>&nbsp;&nbsp;<a href='editarpessoa.php?id=$id'><button type='submit' class='btn btn-success'>Editar</button></a>&nbsp;&nbsp;<a href='apagapessoa.php?id=$id'><button type='submit' class='btn btn-danger'>Apagar</button></a></td>";
                    echo "</tr>";
                }
                mysqli_close($conn);
            ?>
        </section>
        <footer>
            <hr/>
            <div>Agenda 2.0 Desenvolvido em Aula - Versão 1.0</div>
        </footer>
    </body>
</html>