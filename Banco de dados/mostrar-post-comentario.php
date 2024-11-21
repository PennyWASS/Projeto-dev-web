<?php
    // Conexão com o banco de dados
    include("conectarDB.php");
    session_start();

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
            if($tabela["imagem"] != ""){
                echo "<img width='300px' alt='Imagem' src='".$tabela["imagem"]."'>" . "<br>";
            }
            echo $tabela["conteudo"] . "<br>";
            echo "<h3>Comentários:</h3>";
            
            // Mostrando os comentários do post
            if(mysqli_num_rows($verificaTabelaComentarios) > 0){
                $comentarios = mysqli_query($conexao, "SELECT * FROM comentarios WHERE post_id = ".$tabela["id"]. " ORDER BY id DESC");
                while($comentario = mysqli_fetch_array($comentarios)){
                    echo $comentario["comentario"] . "<br>";
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
        $usuario_id = $_SESSION['usuario_id'];
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
?>