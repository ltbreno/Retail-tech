<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root' ; 
    $dbPassword = '';
    $dbName = 'usuario' ;

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    } 
    else 
    {
        echo "Conexão Concluida" ;
    }

?>