<?php

require_once __DIR__."/../vendor/autoload.php";

$path = filter_input(INPUT_SERVER, 'REQUEST_URI');

$id = filter_input(INPUT_GET, 'id');

?>
<html>
    <head>
        <title>PHP OO do Jeito Certo</title>
    </head>
    <body>
    <?php
        if ($path == "/produtos") {
            echo "<a href=\"/produtos/novo\">INSERIR NOVO PRODUTO</a>";
            echo "<hr/>";
            require_once __DIR__.'/listar.php';   
        }
        else if ($path == "/produtos/novo") {
            require_once __DIR__.'/inserir.php';
        }
        else if ($path == "/produtos/exibir?id=$id") {
            require_once __DIR__.'/exibir.php';
        }
        else if ($path == "/produtos/alterar?id=$id") {
            require_once __DIR__.'/alterar.php';
        }
        else if ($path == "/produtos/remover?id=$id") {
            require_once __DIR__.'/remover.php';
        }
        else {
            echo "<a href=\"/produtos\">Lista de Produtos</a>";
        }
    ?>
    </body>
</html>