<?php
    // Conexão com o banco de dados
    include("conectarDB.php");
    session_start();
    $usuario_id = $_SESSION['usuario_id'];
    $nome_usuario = $_SESSION['nome'];
    // Criando a tabela de comentários caso ela não exista
    $verificaTabelaComentarios = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'"); 
    if(mysqli_num_rows($verificaTabelaComentarios) == 0){
        mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS comentarios (
                id INT NOT NULL AUTO_INCREMENT, 
                comentario varchar(255) NOT NULL, 
                usuario_id INT NOT NULL,
                post_id INT NOT NULL,
                PRIMARY KEY(id), 
                CONSTRAINT fk_usuario_comentario FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
                CONSTRAINT fk_post_comentario FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE)");
    } 


    // Mostrando os posts e os comentários de cada post com o campo de texto para inserir um novo comentário
    $verificaTabelaPosts = mysqli_query($conexao, "SHOW TABLES LIKE 'posts'");
    if(mysqli_num_rows($verificaTabelaPosts) > 0){
        $dados = mysqli_query($conexao, "SELECT * FROM posts");
        while ($tabela = mysqli_fetch_array($dados)) {
            // Mostrando os posts
            echo "<h4>". $tabela["titulo"]. "</h4>";
            if($usuario_id == $tabela['usuario_id']){
                echo("Criado por: <b>". $nome_usuario  ."</b> <br>");
            }
            if($tabela["imagem"] != ""){
                echo "<img width='300px' alt='Imagem' src='".$tabela["imagem"]."'>" . "<br>";
            }
            echo $tabela["conteudo"] . "<br>";

            // Verificando se o post foi feito por aquele usuario e exibindo o botão de excluir post
            if($usuario_id == $tabela['usuario_id']){
                echo "<form action='../Banco de dados/mostrar-post-comentario.php' method='POST'>
                <input type='submit' name='excluirPost' value='Excluir Post'> <br> <br> <!--excluir post-->
                <input type='hidden' name='post_id' value='".$tabela["id"]."'>
                
                </form>";
            }

            echo "<h3>Comentários:</h3>";
            
            // Mostrando os comentários do post
            if(mysqli_num_rows($verificaTabelaComentarios) > 0){
                $comentarios = mysqli_query($conexao, "SELECT * FROM comentarios WHERE post_id = ".$tabela["id"]. " ORDER BY id DESC");
                while($comentario = mysqli_fetch_array($comentarios)){
                    if($usuario_id == $comentario['usuario_id']){
                        echo("<b>". $nome_usuario  ."</b> <br>");
                    }
                    echo $comentario["comentario"] . "<br>";
                    
                    // Verificando se o comentário foi feito por aquele usuario e exibindo o botão de excluir comentário
                    if($usuario_id == $comentario['usuario_id']){
                        echo "<form action='../Banco de dados/mostrar-post-comentario.php' method='POST'>
                        <input type='submit' name='excluirComentario' value='Excluir Comentário'> <br> <br> <!--excluir comentario-->
                        
                        <input type='hidden' name='comentario' value='".$comentario["comentario"]."'>
                        <input type='hidden' name='post_id' value='".$tabela["id"]."'>
                        </form>";
                    }
                }
            } else{
                echo "Sem comentários no momento.";
            }

            echo "<br>";

            // Formulário para inserir um novo comentário
            echo "
            <form action='../Banco de dados/mostrar-post-comentario.php' method='POST'>
            <label for='comentario'>Digite seu comentário no campo de texto a seguir:</label> <br>
            <textarea name='comentario' rows='4' cols='40'></textarea> <br> <br>
            <input type='hidden' name='post_id' value='".$tabela["id"]."'>
            <input type='submit' name='inserirComentario' value='Comentar'> <br> <br> <!--inserir novo comentario-->
            </form>
            ";
            
            echo "<hr>";
        }
    } else{
        echo "<br> Sem posts no momento.";
    }

    // Inserindo um novo comentário no banco de dados
    if (isset($_POST['inserirComentario'])) {
        $comentario = $_POST['comentario'];
        $post_id = $_POST['post_id'];

        if($comentario == ""){
            echo "O campo de comentário não pode estar vazio.";
            exit();
        } else{
            mysqli_query($conexao, "INSERT INTO comentarios (comentario, usuario_id, post_id) VALUES ('$comentario', '$usuario_id', '$post_id')");
            header("Location: ../Paginas/index.php");
            exit();
        }        
        header("Location: ../Paginas/index.php");
        exit();
    }

    // Excluindo um comentário do banco de dados
    if(isset($_POST['excluirComentario'])){
        $comentario = $_POST['comentario'];
        $post_id = $_POST['post_id'];
        

        mysqli_query($conexao, "DELETE FROM comentarios WHERE comentario = '$comentario' AND post_id = '$post_id' AND usuario_id = '$usuario_id'");
        
        header("Location: ../Paginas/index.php");
        exit();
    }
    // Excluindo um post do banco de dados
    if(isset($_POST['excluirPost'])){
        $post_id = $_POST['post_id'];

        mysqli_query($conexao, "DELETE FROM posts WHERE id = '$post_id' AND usuario_id = '$usuario_id'");
        header("Location: ../Paginas/index.php");
        exit();
    }
?>