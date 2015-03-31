<?php

use SON\Produto;

require_once '../config.php';
require_once '../src/SON/Produto.php';

$produto = new Produto($conexao);
$produtos = $produto->listar();

foreach ($produtos as $p) {
    echo $p['nome']."<br/>";
}