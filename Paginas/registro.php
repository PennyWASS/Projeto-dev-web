<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registro</title>
</head>
<body>
    <!-- Formulário de registro (envia os dados recebidos para o arquivo registrar.php) -->
    <form action="../Banco de dados/registrar.php" method="POST"> 
        <label for="nome">Digite seu nome:</label> 
        <input type="text" name="nome"> <br> <br> 
        <label for="login">Digite seu e-mail:</label> 
        <input type="email" name="login"> <br> <br> 
        <label for="senha">Digite sua senha:</label> 
        <input type="password" name="senha"> <br> <br> 
        <input type="submit" value="Registrar" name="registrar">
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p> <!-- Link para a página de login -->
    </form>
</body>
</html>