<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../Estilo/estilo-principal.css">
</head>
<body>
    <!-- Sessão do bloco do cabeçalho e do título -->
    <header class="cabeçalho">
        <section class="titulo">
            <h1> Bem-vindo ao Blog! </h1>
        </section>
    </header>

    <!-- Sessão principal -->
    <main class="principal">
        <!-- Aqui deve conter os posts mais recentes -->

        <!-- Sessão para a barra de navegação -->
        <nav class="navegação">

            <!-- Sessão para o formulário -->
            <section class="form">
                <form id="form-opcoes" action="../Banco de dados/acoes.php" method="POST">
                    <input type="submit" name="novoPost" value="Novo Post">  <!-- Criar post -->
                    <input type="submit" name="verPosts" value="Ver todos os meus posts"> <!-- Ver posts -->
                    <input type="submit" name="sair" value="Sair" id="sair-button"> <br/> <br/> <!-- Sair da sessão -->
                   
                </form>
                <hr/>
            </section>
        </nav>
    </main>

    <!-- Sessão para o bloco do rodapé -->
    <footer class="rdp">
       
    </footer>

    <!-- Mostrando todos os posts -->
    <?php
        include("../Banco de dados/mostrar-post-comentario.php");
    ?>

    <script>
        // Confirmação ao sair
        document.getElementById('sair-button').addEventListener('click', function (event) {
            const confirmacao = confirm("Você tem certeza que deseja sair?");
            if (!confirmacao) {
                event.preventDefault(); // Impede o envio do formulário se o usuário cancelar
            }
        });

        // Validação do formulário (exemplo básico)
        document.getElementById('form-opcoes').addEventListener('submit', function (event) {
            const inputs = this.querySelectorAll('input[type="submit"]');
            let algumBotaoClicado = false;

            inputs.forEach(function (botao) {
                if (botao === document.activeElement) {
                    algumBotaoClicado = true;
                }
            });

            if (!algumBotaoClicado) {
                alert("Selecione uma ação antes de enviar!");
                event.preventDefault(); // Impede o envio do formulário
            }
        });

        // Confirmação para exclusões (caso tenha essa funcionalidade na página)
        const excluirBotoes = document.querySelectorAll('input[name="excluirPost"], input[name="excluirComentario"]');
        excluirBotoes.forEach(function (botao) {
            botao.addEventListener('click', function (event) {
                const confirmacao = confirm("Você tem certeza que deseja excluir esse comentário?");
                if (!confirmacao) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
