<?php
    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    $imagem = $_POST["imagem"];

    session_start();
    $usuario_id = $_SESSION['usuario_id']; //ID do usuário recuperado do banco de dados
    // Conexão com o banco de dados
    include("conectarDB.php");
    
    // Criando a tabela de posts caso ela não exista
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS posts (
            id INT NOT NULL AUTO_INCREMENT,
            titulo varchar(255),
            conteudo varchar(255),
            imagem varchar(255),
            usuario_id INT NOT NULL,
            PRIMARY KEY(id),
            CONSTRAINT fk_usuario_post FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE)");

    // Inserindo posts
    mysqli_query($conexao, "INSERT INTO posts (titulo, conteudo, imagem, usuario_id) 
            VALUES ('$titulo', '$conteudo', '$imagem', '$usuario_id')");

    // Redirecionamento para a página principal
    header("Location: ../Paginas/principal.php");
    exit();

?>