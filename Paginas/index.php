<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        // Inicia a sessão antes de qualquer coisa para poder utilizar as variáveis de sessão
        session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="../Estilo/estilo-login.css">
</head>
<body>

    <!-- Sessão do bloco do cabeçalho -->
    <header class="cabeçalho">
        
    </header>

    <!-- Sessão principal -->
    <main class="principal">
        <h3> Login </h3>
        <hr/>

        <!-- Sessão para o formulário -->
        <section class="form">
            <!-- Formulário de login (envia os dados recebidos para o arquivo logar.php) -->
            <form action="../Banco de dados/logar.php" method="POST">
                <!-- Campo para o usuário digitar seu e-mail -->
                <label for="login">Digite seu e-mail:</label>
                <input type="email" name="login" placeholder="E-mail" required> <br/> <br/>

                <!-- Campo para o usuário digitar sua senha -->
                <label for="senha">Digite sua senha:</label>
                <input type="password" name="senha" placeholder="Senha" required> <br/> <br/>

                <!-- Botão para confirmar login (envia dados para a área contendo javascript) -->
                <input type="submit" value="Entrar" name="entrar"> <br/> <br/>

                <!-- Link para a página de registro: -->
                <p>Não tem uma conta ainda? <a href="registro.php">Crie uma agora</a></p> 

            </form>
        </section>
    </main>
    
    <!-- Sessão para o bloco do rodapé -->
    <footer class="rdp">
       
    </footer>
    
    <?php
        // Verifica se o usuário digitou a senha ou o e-mail errado e exibe uma mensagem
        if(isset($_SESSION['mensagem_erro'])){
            echo "
            <script>
                alert('".$_SESSION['mensagem_erro']."');
                window.location.href = 'index.php';
            </script>";
            unset($_SESSION['mensagem_erro']);
        }

        // Verifica se o usuário saiu da sessão e exibe uma mensagem
        if(isset($_SESSION['mensagem_saiu'])){
            echo "
            <script>
                alert('".$_SESSION['mensagem_saiu']."');
                window.location.href = 'index.php';
            </script>";
            unset($_SESSION['mensagem_saiu']);
        }
    ?>
</body>
</html>