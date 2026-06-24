<?php
require_once __DIR__ . '/../../controller/ProdutoController.php';

$produtos = (new ProdutoController())->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Produtos</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Produtos Cadastrados</h2>

<?php if (count($produtos) > 0): ?>

<table>
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Preço</th>
<th>Quantidade</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<?php foreach ($produtos as $p): ?>
<tr>
<td><?= $p->getId() ?></td>
<td><?= $p->getNome() ?></td>
<td><?= $p->getPreco() ?></td>
<td><?= $p->getQuantidade() ?></td>

<td>

<a href="EditaProduto.php?id=<?= $p->getId() ?>">Editar</a>

<form action="DeletaProduto.php" method="POST" style="display:inline">
<input type="hidden" name="id" value="<?= $p->getId() ?>">
<button onclick="return confirm('Excluir produto?')">Excluir</button>
</form>

</td>
</tr>
<?php endforeach; ?>

</tbody>
</table>

<?php else: ?>
<p>Nenhum produto cadastrado.</p>
<?php endif; ?>

<a href="CadastraProduto.php">Cadastrar Produto</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>