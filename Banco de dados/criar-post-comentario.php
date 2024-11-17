<?php
    // Conexão com o banco de dados
    include("conectarDB.php");
    //Criando a base de dados e a tabela de comentários caso elas não existam
    
    // mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS comentarios (
    //         id INT NOT NULL AUTO_INCREMENT, 
    //         comentario varchar(255) NOT NULL, 
    //         usuario_id INT NOT NULL,
    //         post_id INT NOT NULL,
    //         PRIMARY KEY(id), 
    //         CONSTRAINT fk_usuario_comentario FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    //         CONSTRAINT fk_post_comentario FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE)");
    
    // //Inserindo comentários
    // if($inserirComentario){
    //     mysqli_query($conexao, "INSERT INTO comentarios (comentario, usuario_id, post_id) VALUES ('$comentario', '$usuario_id', '$post_id')");
    // }

    //Mostrando os posts
    //Fazer uma área de comentários recentes - no futuro
    
    if(mysqli_num_rows(mysqli_query($conexao, "SHOW TABLES LIKE 'posts'")) == 0){
        echo "<br> Sem posts no momento.";
    } else{
        $dados = mysqli_query($conexao, "SELECT * FROM posts");
        while ($tabela = mysqli_fetch_array($dados)) {
            echo "<h4>". $tabela["titulo"]. "</h4>";
            if($tabela["imagem"] != ""){
                echo "<img width='300px' alt='Imagem' src='".$tabela["imagem"]."'>" . "<br>";
            }
            echo $tabela["conteudo"] . "<br>";
        }
    }
    
    // Verifica a existência da tabela antes de fazer o SELECT
    $verificaTabela = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'");
    if (mysqli_num_rows($verificaTabela) > 0) {
        // Executa o SELECT somente se a tabela existir
        $dados = mysqli_query($conexao, "SELECT * FROM comentarios");
        
        // Exibe os comentários
        while ($tabela = mysqli_fetch_array($dados)) {
            echo $tabela["comentario"] . "<br>";
        }
    } else {
        echo "<br> Sem comentários no momento.";
    }

?>