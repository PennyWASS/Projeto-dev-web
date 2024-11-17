<?php
    $conexao = mysqli_connect("localhost", "root", "", "projetodevweb");
    if (mysqli_connect_errno()) {
        echo "Falha ao conectar: " . mysqli_connect_error();
    }
    else {
        echo "Conexão bem sucedida!";
    }
    
?>