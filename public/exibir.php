<?php

use SON\ProdutoRepository;
use SON\ProdutoService;
use SON\Database;

$db = new Database(include __DIR__."/../config.php");

$produto = new ProdutoRepository();

$service = new ProdutoService($db->getPdo(), $produto);

$resultado = $service->find($id);

$created_at = \DateTime::createFromFormat('Y-m-d H:i:s', $resultado['created_at']);
$updated_at = \DateTime::createFromFormat('Y-m-d H:i:s', $resultado['updated_at']);

echo $resultado['nome']."<br/>";
echo $resultado['descricao']."<br/><br/>";
echo "Criado em: ".$created_at->format('d/m/Y H:i:s')."<br/><br/>";

if ($resultado['updated_at'] > 0) {
    echo "Alterado em: ".$updated_at->format('d/m/Y H:i:s')."<br/><br/>";
}

echo "<br/><a href=\"/produtos\">Voltar</a>";