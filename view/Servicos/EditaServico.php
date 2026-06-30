<?php
require_once __DIR__ . '/../../controller/ServicoController.php';

$controller = new ServicoController();

$id = $_GET['id'] ?? null;

$servico = $controller->buscarPorId($id);

if (!$servico) {
    header("Location: ListaServico.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->atualizar();
    header("Location: ListaServico.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Serviço</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Editar Serviço</h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $servico->getId() ?>">

<input name="nome" value="<?= $servico->getNome() ?>" required>
<input name="preco" type="number" step="0.01" value="<?= $servico->getPreco() ?>" required>
<input name="duracao" type="number" value="<?= $servico->getDuracao() ?>" required>

<button type="submit">Atualizar</button>

</form>

</div>

</body>
</html>