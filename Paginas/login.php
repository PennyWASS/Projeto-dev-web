<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- Formulário de login (envia os dados recebidos para o arquivo logar.php) -->
    <form action="../Banco de dados/logar.php" method="POST">
        <!-- Campo para o usuário digitar seu e-mail -->
        <label for="login">Digite seu e-mail:</label>
        <input type="email" name="login"> <br> <br>
        <!-- Campo para o usuário digitar sua senha -->
        <label for="senha">Digite sua senha:</label>
        <input type="password" name="senha"> <br> <br>
        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Entrar" name="entrar">
        <!-- Link para a página de registro: -->
        <p>Não tem uma conta ainda? <a href="registro.php">Crie uma agora</a></p>
    </form>
    
    <?php
        session_start();
        // Verifica se o usuário digitou a senha ou o e-mail errado e exibe uma mensagem
        if(isset($_SESSION['mensagem_erro'])){
            echo $_SESSION['mensagem_erro'];
            unset($_SESSION['mensagem_erro']);
        }
        // Verifica se o usuário saiu da sessão e exibe uma mensagem
        if(isset($_SESSION['mensagem_saiu'])){
            echo $_SESSION['mensagem_saiu'];
            unset($_SESSION['mensagem_saiu']);
        }
    ?>
</body>
</html>