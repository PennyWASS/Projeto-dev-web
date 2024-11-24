<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post</title>
    <link rel="stylesheet" href="../Estilo/estilo-novo-post.css">
</head>
<body>
    <!-- Sessão do bloco do cabeçalho -->
    <header class="cabeçalho">
        
    </header>

    <!-- Sessão principal -->
    <main class="principal">
        <h3> Crie seu post aqui! </h3>
        <hr/>

        <!-- Sessão para o formulário -->
        <section class="form">
            <form action="../Banco de dados/criar-post.php" method="POST">
                <!-- Campo para o usuário inserir o título do post -->
                <label for="titulo">Insira título:</label>
                <input type="text" name="titulo" placeholder="Título" required> <br/> <br/>

                <!-- Campo para o usuário inserir imagem do post -->
                <label for="imagem" >Link para a imagem (opcional):</label>
                <input type="url" name="imagem" placeholder="URL"> <br/> <br/> <!-- <input type="url" > insere link da imagem -->

                <!-- <input type="file" name="imagem"> <br> <br> -->

                <!-- Campo para o usuário inserir o conteúdo do post -->
                <label for="conteudo">Conteúdo:</label> <br/>
                <textarea name="conteudo" rows="8" cols="40"></textarea> <br/> <br/>

                <input type="submit" value="Criar Post" name="criarPost">

            </form>
        </section>
    </main>
    
   <!-- Sessão para o bloco do rodapé -->
    <footer class="rdp">
       
    </footer>

</body>
</html>