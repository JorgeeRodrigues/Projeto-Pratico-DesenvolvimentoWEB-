<?php

require_once __DIR__ . '/../../controller/ClienteController.php';

$controller = new ClienteController();

$id = $_GET['id'] ?? null;

$cliente = $controller->buscarPorId($id);

if (!$cliente) {
    header("Location: ListaCliente.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $controller->atualizar();

    header("Location: ListaCliente.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Cliente</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Editar Cliente</h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $cliente->getId() ?>">

<label>Nome</label>
<input type="text" name="nome" value="<?= $cliente->getNome() ?>" required>

<label>CPF</label>
<input type="text" name="cpf" value="<?= $cliente->getCpf() ?>" required>

<label>Telefone</label>
<input type="text" name="telefone" value="<?= $cliente->getTelefone() ?>" required>

<button type="submit">Salvar</button>

</form>

</div>

</body>
</html>