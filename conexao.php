<?php
    $comentario = $_POST["comentario"];
    $sair = isset($_POST["sair"]);
    $deletar = isset($_POST["deletar"]);
    $inserirComentario = isset($_POST["inserirComentario"]);

    $conexao = mysqli_connect("localhost", "root", "", "preguica");

    mysqli_query($conexao, "CREATE DATABASE IF NOT EXISTS preguica");
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS comentarios (id INT NOT NULL AUTO_INCREMENT, comentario varchar(255), PRIMARY KEY(id))");
    
    if($inserirComentario){
        mysqli_query($conexao, "INSERT INTO comentarios (comentario) VALUES ('$comentario')");
    }
    if($sair){
        mysqli_close($conexao);
        echo "Conexão encerrada com sucesso!";
    }else{
        header("Location: index.php");
    }
    if($deletar){
        mysqli_query($conexao, "DROP TABLE comentarios");
        echo "Todos os comentários foram excluidos";
    }
?> 