<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post</title>
</head>
<body>
    <form action="../Banco de dados/criar-post.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo"> <br> <br>
        <label for="imagem" >Link para a imagem (opcional):</label>
        <input type="text" name="imagem"> <br> <br>
        <!-- <input type="file" name="imagem"> <br> <br> -->
        <label for="conteudo">Conteúdo:</label> <br>
        <textarea name="conteudo" rows="10" cols="40"></textarea> <br> <br>
        <input type="submit" value="Criar Post" name="criarPost">
    </form>
</body>
</html>