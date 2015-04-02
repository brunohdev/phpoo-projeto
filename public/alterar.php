<?php

use SON\ProdutoRepository;
use SON\ProdutoService;
use SON\Database;

$db = new Database(include __DIR__."/../config.php");

$produto = new ProdutoRepository();

$service = new ProdutoService($db->getPdo(), $produto);

$resultado = $service->find($id);

echo "<form method='POST'>";
echo "Nome: <input type='text' name='nome' value='{$resultado['nome']}'/> ";
echo "Descricao: <input type='text' name='descricao' value='{$resultado['descricao']}'/> ";
echo "<input type='hidden' name='id' value='{$id}'/>";
echo "<input type='submit' name='enviar' value='Alterar'/>";
echo "</form>";

if (isset($_POST['enviar'])){
    $id   = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $produto->setId($id)
            ->setNome($nome)
            ->setDescricao($descricao)
    ;

    $resultado = $service->alterar();

    if ($resultado) {
        header("Location: /produtos");
    }
}

echo "<br/><a href='/produtos'>Voltar</a>";