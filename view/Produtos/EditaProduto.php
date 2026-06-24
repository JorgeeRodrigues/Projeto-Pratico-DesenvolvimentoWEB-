<?php
require_once __DIR__ . '/../../controller/ProdutoController.php';

$controller = new ProdutoController();

$id = $_GET['id'] ?? null;

$produto = $controller->buscarPorId($id);

if (!$produto) {
    header("Location: ListaProduto.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->atualizar();

    header("Location: ListaProduto.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Produto</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Editar Produto</h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $produto->getId() ?>">

<input name="nome" value="<?= $produto->getNome() ?>" required>
<input name="preco" type="number" step="0.01" value="<?= $produto->getPreco() ?>" required>
<input name="quantidade" type="number" value="<?= $produto->getQuantidade() ?>" required>
<input name="categoria" value="<?= $produto->getCategoria() ?>" required>

<button type="submit">Atualizar</button>

</form>

</div>

</body>
</html>