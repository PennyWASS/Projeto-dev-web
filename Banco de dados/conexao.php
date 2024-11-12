<?php
    $comentario = $_POST["comentario"];
    $sair = isset($_POST["sair"]);
    $deletar = isset($_POST["deletar"]);
    $inserirComentario = isset($_POST["inserirComentario"]);

    $conexao = mysqli_connect("localhost", "root", "", "preguica"); //Conexão com o banco de dados
    //$tabela_existe = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'"); //Verifica se a tabela de comentários existe

    mysqli_query($conexao, "CREATE DATABASE IF NOT EXISTS preguica");
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS comentarios (id INT NOT NULL AUTO_INCREMENT, comentario varchar(255), PRIMARY KEY(id))");
    
    if($inserirComentario){
        mysqli_query($conexao, "INSERT INTO comentarios (comentario) VALUES ('$comentario')");
    }
    
    if($deletar){
    /*
        //Forma mais complicada, porém melhor para verificar se a tabela existe
        //Ainda não funciona
        if(mysqli_num_rows($tabela_existe) > 0){
            mysqli_query($conexao, "DROP TABLE IF EXISTS comentarios");
            echo "Todos os comentários foram excluidos";
        }
        else{
            echo "Não há comentários para serem excluidos";
        }
    */
    //Forma mais simples, porém não verifica se a tabela existe:
        mysqli_query($conexao, "DROP TABLE comentarios");
        echo "Todos os comentários foram excluidos";

    }

    if($sair){
        mysqli_close($conexao);
        echo "Conexão encerrada com sucesso!";
    }else{
        header("Location: index-teste.php");
        exit();
    }
    
?> 