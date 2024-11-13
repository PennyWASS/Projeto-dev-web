<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <!-- Formulário -->
    <form action="conexao.php" method="POST">
        <label for="comentario">Digite seu comentário no campo de texto a seguir:</label> <br>
        <textarea name="comentario" rows="4" cols="40"></textarea> <br> <br>
        <input type="submit" name="inserirComentario" value="Comentar"> <br> <br> <!--inserir novo comentario-->
        <input type="submit" name="deletar" value="Deletar"> <br> <br> <!--apagar todos os comentarios-->
        <input type="submit" name="sair" value="Sair"> <br>  <!--sair da sessão-->

        <!-- Exemplo de botão de envio usando uma imagem: (aplicar isso depois) -->
        <!-- <input type="image" width="25px" src="../Imagens/mandar.png" alt="Enviar comentário"> -->
    </form>
    <h3>Comentários:</h3>
    
    <?php
        // Conexão com o banco de dados
        $conexao = mysqli_connect("localhost", "root", "", "preguica");

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
            echo "Sem comentários no momento.";
        }
        
    ?>
</body>
</html>