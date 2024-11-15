<?php
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    $imagem = $_POST["imagem"];

    // Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "projetodevweb");
    
    // Criando a tabela de posts caso ela não exista
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS posts (id INT NOT NULL AUTO_INCREMENT, titulo varchar(255), conteudo varchar(255), imagem varchar(255), PRIMARY KEY(id))");

    // Inserindo posts
    mysqli_query($conexao, "INSERT INTO posts (titulo, conteudo, imagem) VALUES ('$titulo', '$conteudo', '$imagem')");

    // Redirecionamento para a página principal
    header("Location: ../Paginas/principal.php");
    exit();

?>