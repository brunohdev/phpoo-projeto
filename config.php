<?php

// Configurações do seu projeto como constantes, definições de 
// banco de dados, enfim, tudo que o projeto precisa.
try {
    $conexao = new \PDO("mysql:host=localhost;dbname=phpoojeitocerto","root","");
}
catch(\PDOException $e) {
    echo "Erro ao conectar: ".$e->getMessage();
}