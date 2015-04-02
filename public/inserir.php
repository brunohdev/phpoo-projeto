<?php

use SON\ProdutoRepository;
use SON\ProdutoService;
use SON\Database;

$db = new Database(include __DIR__."/../config.php");

$produto = new ProdutoRepository();

$service = new ProdutoService($db->getPdo(), $produto);

echo "<form method='POST'>";
echo "Nome: <input type='text' name='nome'/> ";
echo "Descricao: <input type='text' name='descricao'/> ";
echo "<input type='submit' name='enviar' value='Inserir'/>";
echo "</form>";

if (isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $produto->setNome($nome)
            ->setDescricao($descricao)
    ;

    $resultado = $service->inserir();

    if ($resultado) {
        header("Location: /produtos");
    }
}

echo "<br/><a href='/produtos'>Voltar</a>";