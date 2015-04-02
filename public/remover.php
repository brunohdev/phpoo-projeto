<?php

use SON\ProdutoRepository;
use SON\ProdutoService;
use SON\Database;

$db = new Database(include __DIR__."/../config.php");

$produto = new ProdutoRepository();

$service = new ProdutoService($db->getPdo(), $produto);

$resultado = $service->remover($id);
echo "Produto removido com sucesso!";
echo "<br/><br/><a href='/produtos'>Voltar</a>";