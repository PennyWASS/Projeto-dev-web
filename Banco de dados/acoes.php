<?php
    session_start();
    include("conectarDB.php"); //Conexão com o banco de dados
    // Armazenando os valores dos botões em variáveis
    $sair = isset($_POST["sair"]);
    $deletar = isset($_POST["deletar"]);
    
    $verComentarios = isset($_POST["verComentarios"]);
    $verPosts = isset($_POST["verPosts"]);
    $novoPost = isset($_POST["novoPost"]);

    //ID do usuário recuperado do banco de dados
    $usuario_id = $_SESSION['usuario_id']; 

    //Inserindo um novo post
    if($novoPost){
        header("Location: ../Paginas/novo-post.php");
        exit();
    }

    //VER DEPOIS:

    // //Mostrando todos os comentários daquele usuario:
    // if($verComentarios){
    //     $dados = mysqli_query($conexao, "SELECT * FROM comentarios WHERE usuario_id = '".$_SESSION["usuario_id"]."'");
    //     while($tabela = mysqli_fetch_assoc($dados)){
    //         echo $tabela["comentario"] . "<br>";
    //     }
    // }

    // //Mostrando todos os posts daquele usuario:
    // if($verPosts){
    //     $verificaTabelaComentarios = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'"); 
    //     $verificaTabelaPosts = mysqli_query($conexao, "SHOW TABLES LIKE 'posts'");
    //     if(mysqli_num_rows($verificaTabelaPosts) > 0){
    //         $dados = mysqli_query($conexao, "SELECT * FROM posts");
    //         while ($tabela = mysqli_fetch_array($dados)) {
    //             // Mostrando os posts
    //             echo "<h4>". $tabela["titulo"]. "</h4>";
    //             if($tabela["imagem"] != ""){
    //                 echo "<img width='300px' alt='Imagem' src='".$tabela["imagem"]."'>" . "<br>";
    //             }
    //             echo $tabela["conteudo"] . "<br>";
    //             echo "<h3>Comentários:</h3>";
                
    //             // Mostrando os comentários do post
    //             if(mysqli_num_rows($verificaTabelaComentarios) > 0){
    //                 $comentarios = mysqli_query($conexao, "SELECT * FROM comentarios WHERE post_id = ".$tabela["id"]. " ORDER BY id DESC");
    //                 while($comentario = mysqli_fetch_array($comentarios)){
    //                     echo $comentario["comentario"] . "<br>";
    //                 }
    //             } else{
    //                 echo "Sem comentários no momento.";
    //             }
    
    //             echo "<hr>";
    //         }
    //     }
    //     // header("Location: ../Paginas/index.php");
    // }

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
        header("Location: ../Paginas/index-admin.php");
        exit();
    }else{
        header("Location: ../Paginas/index.php");
        exit();
    }
    
?> 