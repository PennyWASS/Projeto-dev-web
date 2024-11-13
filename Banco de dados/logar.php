<?php
    session_start();
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $_SESSION["logou"] = 0;

    if($email == "admin" && $senha == "1234"){
        echo "Logou! Bem-vindo, admin!";
        $_SESSION["logou"] = 1;
        // header('location: exercicio2p2.php');
    } else {
        echo "Usuário ou senha inválidos!";
    }
    
    if($_SESSION['logou'] == 1){
        echo "Você está logado!";
        header('location: index-teste.php');
    }
    else{
        echo "Você não está logado!";
        header('location: ../Paginas/login.php');
    }
?>