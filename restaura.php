<?php
    session_start();
    include("conecta.php");
    $id = $_GET['id'];
    $pessoa = mysqli_query($conn, "SELECT * from expessoa WHERE id = '$id'");
    while($expessoa = mysqli_fetch_array($pessoa)){
        $tipo = $expessoa['tipo'];
        $nome = $expessoa['nome'];
        $endereco = $expessoa['endereco'];
        $cidade = $expessoa['cidade'];
        $estado = $expessoa['estado'];
        $celular = $expessoa['celular'];
        $email = $expessoa['email'];
        $datanascimento = $expessoa['datanascimento'];
        $profissao = $expessoa['profissao'];
        $expessoa2 = mysqli_query($conn, "INSERT INTO pessoa(tipo,nome,endereco,cidade,estado,celular,email,datanascimento,profissao) VALUES ('$tipo','$nome','$endereco','$cidade','$estado','$celular','$email','$datanascimento','$profissao')");
    }
    $sql = "DELETE FROM expessoa WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Pessoa restaurada com sucesso!');
        window.location.href = 'expessoa.php';
        </script>";
    }
    else
    {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Pessoa não restaurada com sucesso!');
        window.location.href = 'expessoa.php';
        </script>";
    }
    mysqli_close($conn);
?>