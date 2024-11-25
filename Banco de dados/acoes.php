<?php
    session_start();
    include("conectarDB.php"); //Conexão com o banco de dados
    // Armazenando os valores dos botões em variáveis
    $sair = isset($_POST["sair"]);
    // $deletar = isset($_POST["deletar"]);
    $novoPost = isset($_POST["novoPost"]);
    $verPosts = isset($_POST["verPosts"]);

    //ID do usuário recuperado do banco de dados
    $usuario_id = $_SESSION['usuario_id']; 

    //Inserindo um novo post
    if($novoPost){
        header("Location: ../Paginas/novo-post.php");
        exit();
    }
    
    //Ver posts
    if($verPosts){
        header("Location: ../Paginas/meus-posts.php");
        exit();
    }

    //Deletando todos os comentários
    // if($deletar){
    //     mysqli_query($conexao, "DROP TABLE comentarios");
    //     echo "Todos os comentários foram excluidos";
    // }

    //Sair da sessão
    if($sair){
        mysqli_close($conexao);
        $_SESSION["mensagem_saiu"] ='Conxeão encerrada com sucesso!';
        // header("Location: ../Paginas/index.php");
        // exit();
    }elseif ($_SESSION["logouAdmin"] == 1){
        header("Location: ../Paginas/index-admin.php");
        exit();
    }else{
        header("Location: ../Paginas/principal.php");
        exit();
    }
    
?> 