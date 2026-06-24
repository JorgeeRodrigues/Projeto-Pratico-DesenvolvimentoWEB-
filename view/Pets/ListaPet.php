<?php

require_once __DIR__ . '/../../controller/PetController.php';

$pets = (new PetController())->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Pets</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Pets Cadastrados</h2>

<?php if (count($pets) > 0): ?>

<table>

<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Espécie</th>
<th>Idade</th>
<th>Dono</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<?php foreach ($pets as $p): ?>
<tr>
<td><?= $p->getId() ?></td>
<td><?= $p->getNomePet() ?></td>
<td><?= $p->getEspecie() ?></td>
<td><?= $p->getIdade() ?></td>
<td><?= $p->getDonoPet() ?></td>

<td>

<a href="EditaPet.php?id=<?= $p->getId() ?>">Editar</a>

<form action="DeletaPet.php" method="POST" style="display:inline">
<input type="hidden" name="id" value="<?= $p->getId() ?>">
<button type="submit" onclick="return confirm('Excluir?')">Excluir</button>
</form>

</td>
</tr>
<?php endforeach; ?>

</tbody>

</table>

<?php else: ?>
<p>Nenhum pet cadastrado.</p>
<?php endif; ?>

<a href="CadastraPet.php">Cadastrar Pet</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>