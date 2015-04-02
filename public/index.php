<?php

require_once __DIR__."/../vendor/autoload.php";

$path = filter_input(INPUT_SERVER, 'REQUEST_URI');

?>
<html>
    <head>
        <title>PHP OO do Jeito Certo</title>
    </head>
    <body>
    <?php
        if ($path == "/produtos") {
            require_once __DIR__.'/listar.php';   
        } else {
            echo "<a href=\"/produtos\">Lista de Produtos</a>";
        }
    ?>
    </body>
</html>