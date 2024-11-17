<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin</title>
</head>
<body>
    <!-- Aqui deve conter os posts mais recentes -->
    <?php
        //Incluindo o arquivo de conexão
        include("../Banco de dados/criar-post-comentario.php");
    ?>
    <!-- <h1>PÁGINA DE USUÁRIO</h1> -->
    <!-- Formulário -->
    <h3>Comentários:</h3>
    <form action="../Banco de dados/acoes.php" method="POST">
        <!-- <input type="submit" name="verComentarios" value="Ver todos os meus comentários"> -->
        <input type="submit" name="verPosts" value="Ver todos os meus posts"> <br> <br>
        <input type="submit" name="novoPost" value="Novo Post"> <br> <br>
        <input type="submit" name="sair" value="Sair"> <br>  <!--sair da sessão-->
        
        <!-- <label for="comentario">Digite seu comentário no campo de texto a seguir:</label> <br>
        <textarea name="comentario" rows="4" cols="40"></textarea> <br> <br>
        <input type="submit" name="inserirComentario" value="Comentar"> <br> <br> -->
    </form>
    
</body>
</html>