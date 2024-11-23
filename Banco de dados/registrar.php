<?php
    // Recebendo os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $registrar = isset($_POST["registrar"]);
    // Incluindo o arquivo de conexão com o banco de dados
    include("conectarDB.php");
    // Criando a tabela de usuários caso ela não exista
    mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS usuarios (
            id INT NOT NULL AUTO_INCREMENT, 
            nome varchar(255), 
            email varchar(255), 
            senha varchar(255), 
            PRIMARY KEY(id))");
    
    //Pegando a lista de usuários cadastrados
    $usuarios_cadastrados = mysqli_query($conexao, "SELECT * FROM usuarios");

    //Verificando se o usuário apertou o botão de registrar
    if($registrar){
        while ($tabela = mysqli_fetch_array($usuarios_cadastrados)) {
            // Verificando se o usuário já está cadastrado
            if($tabela['nome'] == $nome && $tabela['email'] == $email && $tabela['senha'] == $senha){
                echo "
                <script>
                    alert('Usuário já cadastrado!');
                    window.location.href = '../Paginas/index.php';
                </script>";
                exit();
            } elseif($tabela['nome'] ==  $nome){
                echo "
                <script>
                    alert('Já existe uma pessoa com esse nome de usuário, tente novamente com outro nome de usuário');
                    window.location.href = '../Paginas/registro.php';
                </script>";
                exit();
            } elseif($tabela['email'] == $email){
                echo "
                <script>
                    alert('Já existe uma pessoa com esse email');
                    window.location.href = '../Paginas/index.php';
                </script>";
                exit();
            }
        }
    }
    else{
        echo "<script>alert('Erro ao registrar usuário!');</script>";
    }

    // Inserindo o novoo usuário no banco de dados
    mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    echo "<script>alert('Usuário registrado com sucesso!');</script>";
    // Redirecionamento para a página de login
    header("Location: ../Paginas/index.php");
    exit();
?>