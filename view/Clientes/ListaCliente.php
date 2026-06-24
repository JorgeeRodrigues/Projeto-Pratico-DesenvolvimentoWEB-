<?php

require_once __DIR__ . '/../../controller/ClienteController.php';

$clientes = (new ClienteController())->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Clientes</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Clientes Cadastrados</h2>

<?php if (count($clientes) > 0): ?>

<table>
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>CPF</th>
<th>Telefone</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<?php foreach ($clientes as $c): ?>
<tr>
<td><?= $c->getId() ?></td>
<td><?= $c->getNome() ?></td>
<td><?= $c->getCpf() ?></td>
<td><?= $c->getTelefone() ?></td>

<td>
<a href="EditaCliente.php?id=<?= $c->getId() ?>">Editar</a>

<form action="DeletaCliente.php" method="POST" style="display:inline">
<input type="hidden" name="id" value="<?= $c->getId() ?>">
<button type="submit" onclick="return confirm('Excluir?')">Excluir</button>
</form>
</td>

</tr>
<?php endforeach; ?>

</tbody>
</table>

<?php else: ?>
<p>Nenhum cliente cadastrado.</p>
<?php endif; ?>

<a href="CadastraCliente.php">Cadastrar Cliente</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>