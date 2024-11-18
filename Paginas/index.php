<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <!-- Aqui deve conter os posts mais recentes -->
    <!-- Formulário (Deve conter todas as opções que o usuário pode utilizar) -->
    <form action="../Banco de dados/acoes.php" method="POST">
        
        <input type="submit" name="novoPost" value="Novo Post"> 
        <input type="submit" name="sair" value="Sair"> <br>  <!--sair da sessão-->
        <!-- Modificações futuras -->
        <!-- <input type="submit" name="verComentarios" value="Ver todos os meus comentários"> -->
        <!-- <input type="submit" name="verPosts" value="Ver todos os meus posts"> <br> <br> -->
    </form>
    <!-- Mostrando todos os posts: -->
    <?php
        //Incluindo o arquivo de conexão
        include("../Banco de dados/mostrar-post-comentario.php");
    ?>
</body>
</html>