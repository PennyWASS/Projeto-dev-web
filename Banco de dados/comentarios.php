<?php
    // Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "projetodevweb");

    // Verifica a existência da tabela antes de fazer o SELECT
    $verificaTabela = mysqli_query($conexao, "SHOW TABLES LIKE 'comentarios'");
    if (mysqli_num_rows($verificaTabela) > 0) {
        // Executa o SELECT somente se a tabela existir
        $dados = mysqli_query($conexao, "SELECT * FROM comentarios");
        
        // Exibe os comentários
        while ($tabela = mysqli_fetch_array($dados)) {
            echo $tabela["comentario"] . "<br>";
        }
    } else {
        echo "Sem comentários no momento.";
    }
?>