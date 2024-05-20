<?php

    $dbHost = "Localhost";
    $dbUsername = 'root';
    $dbPassword ='';
    $dbName = 'cadastro_cliente';

    $Conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($Conexao->$dbName) {
        echo("erro");
    }
    else {
        echo ("Conexão realizada com sucesso!");
    }
    
?>