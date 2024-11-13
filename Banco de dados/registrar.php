<?php
    $nome = $_POST["nome"];
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $conexao = mysqli_connect("localhost", "root", "", "projeto");
    // mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS usuarios (id INT NOT NULL AUTO_INCREMENT, nome varchar(255), email varchar(255), senha varchar(255), PRIMARY KEY(id))");
    // mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    header("Location: ../Paginas/login.php");
    exit();
    // Falta terminar
?>