<?php

use SON\ProdutoRepository;
use SON\ProdutoService;
use SON\Database;

$db = new Database(include __DIR__."/../config.php");

$produto = new ProdutoRepository();

$service = new ProdutoService($db->getPdo(), $produto);

foreach ($service->listar() as $p) {
    echo $p['nome']." - ";
    echo "<a href=\"produtos/exibir?id=".$p['id']."\">Exibir</a> - ";
    echo "<a href=\"produtos/alterar?id=".$p['id']."\">Alterar</a> - ";
    echo "<a href=\"produtos/remover?id=".$p['id']."\">Remover</a><br/>";
}