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
        <h3>Comentários:</h3> <br> <br>
    </form>
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "preguica");
        $dados = mysqli_query($conexao, "SELECT * FROM comentarios");
        while($tabela = mysqli_fetch_array($dados)){
            echo $tabela["comentario"]. "<br>";
        }
    ?>
</body>
</html>