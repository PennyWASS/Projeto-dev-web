<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post</title>
    
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
            padding: 25px;
            font-size: 17px;
            width: fit-content;
            margin: auto;
            border-radius: 5px;
            /* Definição da dor de fundo do formulário, afastamento, tamanho da fonte, largura, margem e arrendondamento das bordas do bloco */
           
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