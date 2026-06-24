<?php
require_once __DIR__ . '/../../controller/ProdutoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new ProdutoController())->salvar();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Produto</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Cadastrar Produto</h2>

<form method="POST">

<input name="nome" placeholder="Nome do Produto" required>
<input name="preco" type="number" step="0.01" placeholder="Preço" required>
<input name="quantidade" type="number" placeholder="Quantidade" required>
    
<button type="submit">Cadastrar</button>

</form>

<a href="ListaProduto.php">Ver Produtos</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>