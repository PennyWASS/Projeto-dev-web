<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin</title>
</head>
<body>
    <h1>PÁGINA DE USUÁRIO</h1>
    <!-- Formulário -->
    <form action="../Banco de dados/conexao.php" method="POST">
        <label for="comentario">Digite seu comentário no campo de texto a seguir:</label> <br>
        <textarea name="comentario" rows="4" cols="40"></textarea> <br> <br>
        <input type="submit" name="inserirComentario" value="Comentar"> <br> <br> <!--inserir novo comentario-->
        <input type="submit" name="sair" value="Sair"> <br>  <!--sair da sessão-->
    </form>
    <h3>Comentários:</h3>
    
    <?php
        include("../Banco de dados/comentarios.php");
    ?>
</body>
</html>