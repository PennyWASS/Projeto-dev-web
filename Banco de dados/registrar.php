<?php
    // Recebendo os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    // Incluindo o arquivo de conexão com o banco de dados
    include("conectarDB.php");
    // Criando a tabela de usuários caso ela não exista
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS usuarios (
            id INT NOT NULL AUTO_INCREMENT, 
            nome varchar(255), 
            email varchar(255), 
            senha varchar(255), 
            PRIMARY KEY(id))");
    // Inserindo usuários
    mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    // Redirecionamento para a página de login
    header("Location: ../Paginas/index.php");
    exit();
?>