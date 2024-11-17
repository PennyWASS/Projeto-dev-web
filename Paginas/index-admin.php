<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin</title>
</head>
<body>
    <h1>PÁGINA DE ADMIN</h1>
    <!-- Formulário -->
    <?php
        include("../Banco de dados/criar-post-comentario.php");
    ?>
    <form action="../Banco de dados/acoes.php" method="POST">
        <label for="comentario">Digite seu comentário no campo de texto a seguir:</label> <br>
        <textarea name="comentario" rows="4" cols="40"></textarea> <br> <br>
        <input type="submit" name="inserirComentario" value="Comentar"> <br> <br> <!--inserir novo comentario-->
        <input type="submit" name="deletar" value="Deletar"> <br> <br> <!--apagar todos os comentarios-->
        <input type="submit" name="sair" value="Sair"> <br>  <!--sair da sessão-->

        <!-- Exemplo de botão de envio usando uma imagem: (aplicar isso depois) -->
        <!-- <input type="image" width="25px" src="../Imagens/mandar.png" alt="Enviar comentário"> -->
    </form>
    <h3>Comentários:</h3>
    
    
</body>
</html>