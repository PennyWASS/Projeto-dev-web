<?php
    session_start();
    // Armazenando os valores dos botões em variáveis
    $comentario = $_POST["comentario"];
    $sair = isset($_POST["sair"]);
    $deletar = isset($_POST["deletar"]);
    $inserirComentario = isset($_POST["inserirComentario"]);

    //Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "projetodevweb"); //Conexão com o banco de dados
   
    //Criando a base de dados e a tabela de comentários caso elas não existam
    mysqli_query($conexao, "CREATE DATABASE IF NOT EXISTS projetodevweb");
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
        $_SESSION["mensagem_saiu"] ='Conxeão encerrada com sucesso!';
        header("Location: ../Paginas/login.php");
        exit();
    }elseif ($_SESSION["logouAdmin"] == 1){
        header("Location: index-teste.php");
        exit();
    }else{
        header("Location: ../Paginas/principal.php");
        exit();
    }
    
?> 