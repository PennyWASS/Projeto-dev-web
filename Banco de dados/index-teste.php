<html>
<body>
    <form action="conexao.php" method="POST">
        <label for="comentario">Digite seu comentário no campo de texto a seguir:</label> <br>
        <textarea name="comentario" rows="4" cols="40"></textarea> <br> <br>
        <label for="inserirComentario">Inserir novo comentário:</label>
        <input type="submit" name="inserirComentario"> <br> <br>
        <label for="deletar">Deletar comentários:</label> <!--apagar todos os comentarios-->
        <input type="submit" name="deletar"> <br> <br> 
        <label for="sair">Sair:</label> <!--sair da sessão-->
        <input type="submit" name="sair"> <br>  
        <h3>Comentários:</h3> 
    </form>
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "preguica");
        $dados = mysqli_query($conexao, "SELECT * FROM comentarios");
        while($tabela = mysqli_fetch_array($dados)){
            echo $tabela["comentario"]. "<br>";
        }

        //Tentativa de resolver o erro: Não funcionou
    /*
        $resultado = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'");
        if ($resultado && $resultado->num_rows > 0) {
            // Se a tabela existe, faz a consulta
            $dados = mysqli_query($conexao, "SELECT * FROM comentarios");
            
            // Exibe os comentários, se existirem
            while ($tabela = mysqli_fetch_array($dados)) {
                echo $tabela["comentario"] . "<br>";
            }
        } else {
            echo "Sem comentários no momento.";
        }
    */
    ?>
</body>
</html>