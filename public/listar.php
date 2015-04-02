<?php

use SON\Produto;
use SON\Database;

$db = new Database(include __DIR__."/../config.php");
$produto = new Produto($db->getPdo());

$produtos = $produto->listar();

foreach ($produtos as $p) {
    echo $p['nome']."<br/>";
}