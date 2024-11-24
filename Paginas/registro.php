<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registro</title>
    <link rel="stylesheet" href="../Estilo/estilo-registro.css"> 
</head>
<body>
    <!-- Sessão do bloco do cabeçalho e dos títulos -->
    <header class="cabeçalho">
        <section class="titulo">
            <h1> Compartilhe seus gostos da maneira que quiser </h1>
            <h2> Crie um blog pessoal rápido e fácil </h2>

        </section>
    </header>

    <!-- Sessão principal -->
    <main class="principal">
        <h3> Registro </h3>
        <hr/>

        <!-- Sessão para o formulário -->
        <section class="form">
            
            <!-- Formulário de registro (envia os dados recebidos para o arquivo registrar.php) -->
            <form action="../Banco de dados/registrar.php" method="POST"> 

                <label for="nome">Digite seu nome:</label> 
                <input type="text" name="nome" placeholder="Nome" required> <br/> <br/>

                <label for="login">Digite seu e-mail:</label> 
                <input type="email" name="login" placeholder="E-mail" required> <br/> <br/>

                <label for="senha">Digite sua senha:</label> 
                <input type="password" name="senha" placeholder="Senha" required> <br/> <br/>

                <!-- Botão para confirmar registro (envia dados para a área contendo javascript) -->
                <input type="submit" value="Registrar" name="registrar"> <br/> <br/>
                

                <p>Já tem uma conta? <a href="index.php">Faça login</a></p> <!-- Link para a página de login -->
            </form>
        </section>
    </main>
    
    <!-- Sessão para o bloco do rodapé -->
    <footer class="rdp">
       
    </footer>
</body>
</html>