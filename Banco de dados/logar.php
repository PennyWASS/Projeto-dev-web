<?php
    session_start();
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $_SESSION["logouAdmin"] = 0;
    // $_SESSION["logouUsuario"] = 0;

    //Login do Admin
    if($email == "admin" && $senha == "1234"){
        echo "Logou! Bem-vindo, admin!";
        $_SESSION["logouAdmin"] = 1;
    } else {
        echo "Usuário ou senha inválidos!";
    }
    
    //Redirecionamento para a página do admin
    if($_SESSION['logouAdmin'] == 1){
        echo "Você está logado!";
        header('location: index-teste.php');
        exit();
    }
    else{
        echo "Você não está logado!";
        header('location: ../Paginas/login.php');
        exit();
    }

    //Login do usuário
    $conexao = mysqli_connect("localhost", "root", "", "projetodevweb");

    $verificaUsuario = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
    if(mysqli_num_rows($verificaUsuario) == 1){
        echo "Logou! Bem-vindo, $email!";
        // $_SESSION["logouUsuario"] = 1;
        header('location: ../Paginas/principal.php');
        exit();
    } else {
        $_SESSION['mensagem_erro'] = "Email ou senha inválidos!";
        header('location: ../Paginas/login.php');
        exit();
    }


?>