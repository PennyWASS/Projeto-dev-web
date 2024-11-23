<?php
    session_start();
    if($email == "admin@gmail.com" && $senha == "1234"){
        echo "Logou! Bem-vindo, admin!";
        $_SESSION["logouAdmin"] = 1;
    } else {
        echo "Usuário ou senha inválidos!";
    }

?>