<?php
    // Armazenando os valores dos botões em variáveis
    $comentario = $_POST["comentario"];
    $sair = isset($_POST["sair"]);
    $deletar = isset($_POST["deletar"]);
    $inserirComentario = isset($_POST["inserirComentario"]);

    //Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "preguica"); //Conexão com o banco de dados
    //$tabela_existe = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'"); //Verifica se a tabela de comentários existe

    //Criando a base de dados e a tabela de comentários caso elas não existam
    mysqli_query($conexao, "CREATE DATABASE IF NOT EXISTS preguica");
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS comentarios (id INT NOT NULL AUTO_INCREMENT, comentario varchar(255), PRIMARY KEY(id))");
    
    //Inserindo comentários
    if($inserirComentario){
        mysqli_query($conexao, "INSERT INTO comentarios (comentario) VALUES ('$comentario')");
    }
    
    //Deletando todos os comentários
    if($deletar){
        mysqli_query($conexao, "DROP TABLE comentarios");
        echo "Todos os comentários foram excluidos";

    }

    //Sair da sessão
    if($sair){
        mysqli_close($conexao);
        echo "Conexão encerrada com sucesso!";
    }else{
        header("Location: index-teste.php");
        exit();
    }
    
?> 