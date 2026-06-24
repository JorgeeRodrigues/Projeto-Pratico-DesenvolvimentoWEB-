<?php
require_once __DIR__ . '/../../controller/ServicoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new ServicoController())->salvar();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Serviço</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Cadastrar Serviço</h2>

<form method="POST">

<input name="nome" placeholder="Nome do Serviço" required>
<input name="preco" type="number" step="0.01" placeholder="Preço" required>
<input name="duracao" type="number" placeholder="Duração (min)" required>

<button type="submit">Cadastrar</button>

</form>

<a href="ListaServico.php">Ver Serviços</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>