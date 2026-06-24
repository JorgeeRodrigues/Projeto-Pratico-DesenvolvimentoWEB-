<?php
require_once __DIR__ . '/../../controller/ServicoController.php';

$servicos = (new ServicoController())->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Serviços</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Serviços Cadastrados</h2>

<?php if (count($servicos) > 0): ?>

<table>
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Preço</th>
<th>Duração</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<?php foreach ($servicos as $s): ?>
<tr>
<td><?= $s->getId() ?></td>
<td><?= $s->getNome() ?></td>
<td><?= $s->getPreco() ?></td>
<td><?= $s->getDuracao() ?> min</td>

<td>

<a href="EditaServico.php?id=<?= $s->getId() ?>">Editar</a>

<form action="DeletaServico.php" method="POST" style="display:inline">
<input type="hidden" name="id" value="<?= $s->getId() ?>">
<button onclick="return confirm('Excluir serviço?')">Excluir</button>
</form>

</td>
</tr>
<?php endforeach; ?>

</tbody>
</table>

<?php else: ?>
<p>Nenhum serviço cadastrado.</p>
<?php endif; ?>

<a href="CadastraServico.php">Cadastrar Serviço</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>