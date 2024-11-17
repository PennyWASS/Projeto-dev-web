<?php
    session_start();
    include("conectarDB.php"); //Conexão com o banco de dados
    // Armazenando os valores dos botões em variáveis
    $comentario = $_POST["comentario"];
    $sair = isset($_POST["sair"]);
    $deletar = isset($_POST["deletar"]);
    $inserirComentario = isset($_POST["inserirComentario"]);
    $verComentarios = isset($_POST["verComentarios"]);
    $verPosts = isset($_POST["verPosts"]);
    $novoPost = isset($_POST["novoPost"]);

    //ID do usuário recuperado do banco de dados
    $usuario_id = $_SESSION['usuario_id']; 
    
    //ID do post recuperado do banco de dados
    // include("armazena-post.php");
    // $pegarIdPost = mysqli_query($conexao, "SELECT id FROM posts WHERE titulo = '$titulo' AND conteudo = '$conteudo' AND imagem = '$imagem'");
    // $id = mysqli_fetch_assoc($pegarIdPost);
    // $_SESSION["post_id"] = $id['id'];
    // $post_id = $_SESSION["post_id"];
    
    //Criando a base de dados e a tabela de comentários caso elas não existam
    
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS comentarios (
            id INT NOT NULL AUTO_INCREMENT, 
            comentario varchar(255) NOT NULL, 
            usuario_id INT NOT NULL,
            post_id INT NOT NULL,
            PRIMARY KEY(id), 
            CONSTRAINT fk_usuario_comentario FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
            CONSTRAINT fk_post_comentario FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE)");
    
    //Inserindo comentários
    if($inserirComentario){
        mysqli_query($conexao, "INSERT INTO comentarios (comentario) VALUES ('$comentario', '$usuario_id', '$post_id')");
    }

    //Inserindo um novo post
    if($novoPost){
        header("Location: ../Paginas/criar-post.php");
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
    //     $dados = mysqli_query($conexao, "SELECT * FROM posts WHERE usuario_id = '".$_SESSION["usuario_id"]."'");
    //     while($tabela = mysqli_fetch_assoc($dados)){
    //         echo "<h4>". $tabela["titulo"]. "</h4>";
    //         if($tabela["imagem"] != ""){
    //             echo "<img width='300px' alt='Imagem' src='".$tabela["imagem"]."'>" . "<br>";
    //         }
    //         echo $tabela["conteudo"] . "<br>";
            
    //     }
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