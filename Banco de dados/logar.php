<?php
    session_start();
    include("conectarDB.php");
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $_SESSION["logouAdmin"] = 0;
    // $_SESSION["logouUsuario"] = 0;

    //Pegando o ID do usuário
    // $verificaUsuario2 = mysqli_query($conexao, "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'");

    // if (mysqli_num_rows($verificaUsuario2) == 1) {
    //     // Obtém o id do usuário do banco de dados
    //     $usuario = mysqli_fetch_assoc($verificaUsuario2);
        
    //     // Armazena o id do usuário na sessão
    //     $_SESSION['usuario_id'] = $usuario;
        
    //     // echo "Logado com sucesso! Bem-vindo, " . $usuario['email'];
    //     // header('Location: index.php');  // Redireciona para a página principal ou de posts
    // } else {
    //     echo "Usuário ou senha inválidos!";
    //     header('Location: login.php');
    // }

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
        header('location: ../Paginas/index-admin.php');
        exit();
    }

    //Login do usuário
    
    
    $verificaUsuario = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
    if(mysqli_num_rows($verificaUsuario) == 1){
        echo "Logou! Bem-vindo, $email!";
        //Pegando o ID do usuário
        $pegarId = mysqli_query($conexao, "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'");
        $id = mysqli_fetch_assoc($pegarId);
        $_SESSION["usuario_id"] = $id['id'];
        // Redirecionamento para a página principal
        header('location: ../Paginas/index.php');
        exit();
    } else {
        $_SESSION['mensagem_erro'] = "Email ou senha inválidos!";
        header('location: ../Paginas/login.php');
        exit();
    }


?>