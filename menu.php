<?php
    $tipo =  $_SESSION["tipo"];
    if($tipo === "admin"){
        echo "<a href='agenda.php' style='text-decoration: none; font-weight: bold;'>HOME | </a>";
        echo "<a href='usuario.php' style='text-decoration: none; font-weight: bold;'>USUÁRIO | </a>";
        echo "PESSOAS";
    }
    else {
        echo "<a href='agenda.php' style='text-decoration: none; font-weight: bold;'>HOME | </a>";
        echo "PESSOAS";
    }
?>