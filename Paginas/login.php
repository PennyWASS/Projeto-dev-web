<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../Banco de dados/logar.php" method="POST">
        <label for="login">Digite seu e-mail:</label>
        <input type="text" name="login"> <br> <br>
        <label for="senha">Digite sua senha:</label>
        <input type="password" name="senha"> <br> <br>
        <input type="submit" value="Entrar" name="entrar">
        <p>Não tem uma conta ainda? <a href="registro.php">Crie uma agora</a></p>
    </form>
</body>
</html>