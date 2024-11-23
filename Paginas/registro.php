<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registro</title>
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
            height: 150px;
            /* Definição da altura e cor de fundo do cabeçalho */
        
        }
        .titulo{
            text-align: center;         
            padding: 25px;
            /* Centralização dos títulos e definição do seu afastamento em relação as bordas */

        }
        .titulo h2{
            padding: 20px;
            font-size: 20px;
            color: aliceblue;
            /* Definição da cor, tamanho da fonte e do afastamento do 2° título em relação as bordas */

        }
        .titulo h1{
            font-weight: lighter;
            font-size: 30px;
            color: aliceblue;
            /* Definição da cor, peso e tamanho da fonte, e do afastamento do 1° título em relação as bordas */

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
            border-radius: 5px;
            text-align: center;     
            padding: 20px;
            width: 363.1px;
            justify-content: center;
            margin: auto;
            /* Definição da cor de fundo do bloco ao redor do 3° título, centralização e alinhamento, afastamento, margem, arredondamento das bordas do bloco, largura  */


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
            font-size: 17px;
            width: fit-content;
            margin: auto;
            border-radius: 5px;
            /* Definição da dor de fundo do formulário, afastamento, centralização, tamanho da fonte, largura, margem e arrendondamento das bordas do bloco */

        
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
            /* Definição da centralização do texto, cor de fundo, afastamento, e margem do rodapé*/
        
        }

    </style>
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