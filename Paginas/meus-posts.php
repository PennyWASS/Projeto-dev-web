<?php
    // Incluindo o arquivo de conexão
    include("../Banco de dados/conectarDB.php");
    session_start();
    //ID do usuário recuperado do banco de dados
    $usuario_id = $_SESSION['usuario_id'];
    $nome_usuario = $_SESSION['nome'];
    $verificaTabelaComentarios = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'"); 

    $verificaTabelaPosts = mysqli_query($conexao, "SHOW TABLES LIKE 'posts'");
    if(mysqli_num_rows($verificaTabelaPosts) > 0){
        $dados = mysqli_query($conexao, "SELECT * FROM posts WHERE usuario_id = " . $usuario_id . " ORDER BY id DESC");
        echo "<h1>". $nome_usuario ." Esses são os seus Posts</h1>";
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
                }
            } else{
                echo "Sem comentários no momento.";
            }

            echo "<br>";
            
            echo "<hr>";
        }
    } else{
        echo "<br> Sem posts no momento.";
    }

    echo "<form method='POST'>
    <input type='submit' name='voltar' value='Voltar'> <br> <br>
    </form>";
    if(isset($_POST['voltar'])){
        header("Location: principal.php");
    }
?>