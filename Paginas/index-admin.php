<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin</title>
    <link rel="stylesheet" href="../Estilo/estilo-principal-admin.css">
</head>
<body>
<!-- Sessão do bloco do cabeçalho e do título -->
    <header class="cabeçalho">
        <section class="titulo">
            <h1> Bem-vindo ao Blog! (Admin) </h1>
        </section>
    </header>

    <!-- Sessão principal -->
    <main class="principal">
        <!-- Aqui deve conter os posts mais recentes -->

        <!-- Sessão para a barra de navegação -->
        <nav class="navegação">

            <!-- Sessão para o formulário -->
            <section class="form">
                <form action="../Banco de dados/acoes.php" method="POST">
                    <input type="submit" name="novoPost" value="Novo Post">  <!-- Criar post -->
                    <input type="submit" name="verPosts" value="Ver todos os meus posts"> <!-- Ver posts -->
                    <input type="submit" name="sair" value="Sair"> <br/> <br/> <!-- Sair da sessão -->

                </form>
                <hr/>
            </section>
        </nav>
    </main>

    <!-- Sessão para o bloco do rodapé -->
    <footer class="rdp">
       
    </footer>
    <!-- Mostrando todos os posts: -->
    <?php
        //Incluindo o arquivo de conexão
        include("../Banco de dados/mostrar-post-comentario-admin.php");
    ?>

</body>
</html>