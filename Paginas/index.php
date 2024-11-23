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
    <style>
        /* Área para estilização do documento */
        *{
            box-sizing: border-box;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            /* Padrões de estilização para todo o conteúdo do documento */

        }
        html{
            height: 100%;
            /* Altura do documento html */

        }
        body{
            min-height: 100%;
            display: flex;
            flex-direction: column;
            /* Altura do corpo documento html e organização do conteúdo do corpo em relação à altura*/

        }
        .cabeçalho{
            background-color: rgb(54,54,54);
            height: 100px;
            padding: 25px;
            /* Definição da altura, afastamento e cor de fundo do cabeçalho */
        
        }
        .principal{
            flex: 1;
            background-color: rgb(222,222,222);
            display: flex;
            flex-direction: column;
            /* Organização do conteúdo principal e definição de cor de fundo */
            
        }
        .principal h3{
            background-color: ghostwhite;
            text-align: center;     
            padding: 20px;
            width: 363.1px;
            justify-content: center;
            margin: auto;
            border-radius: 5px;
            /* Definição da cor de fundo do bloco ao redor do h3, centralização e alinhamento, afastamento, margem, arredondamento das bordas do bloco, largura  */


        }
        .principal hr{
            width: 340px;
            margin: 10px auto;
            border: 0.5px solid ghostwhite;
            /* Definição da largura, margem, e borda da linha horizontal */
             
        }
        .form{
            background-color: ghostwhite;
            text-align: center;
            padding: 25px;
            padding-top: 50px;
            padding-bottom: 50px;
            font-size: 17px;
            width: fit-content;
            margin: auto;
            border-radius: 5px;
            /* Definição da dor de fundo do formulário, afastamentos, centralização, tamanho da fonte, largura, margem e arrendondamento das bordas do bloco */
        
        }
        .form input[type=submit] {
            border-radius: 10px;
            border-width: 1px;
            height: 40px;
            width: 100px;
            border-color: aliceblue;
            text-shadow: none;
            /*Definição do arrendondamento das bordas do botão, largura das bordas, altura e largura do botão, cor das bordas, e sombra do texto */

        }
        .form input[type=submit]:hover {
            background-color: darkgray;
            color: white;
            /* Definição da cor de fundo e da cor do texto do hover do botão  */
        
        }
        .form p{
            font-size: 15px;
            /* Definição do tamanho da fonte do texto embaixo do botão  */
        }
        .form a{
            text-decoration: none;
            /* Remoção do traço embaixo do link */

        }
        .rdp{
            text-align: center;
            background-color: rgb(54,54,54);
            padding: 10px;
            margin-top: auto;
            /* Definição do alinhamento do texto, cor de fundo, afastamento, e margem do rodapé*/
        
        }
        
    </style>
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