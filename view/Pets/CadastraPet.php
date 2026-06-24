<?php

require_once __DIR__ . '/../../controller/PetController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new PetController())->salvar();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Pet</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Cadastrar Pet</h2>

<form method="POST">

<label>Nome do Pet</label>
<input type="text" name="nome_pet" required>

<label>Espécie</label>
<input type="text" name="especie" required>

<label>Idade</label>
<input type="number" name="idade" required>

<label>Dono</label>
<input type="text" name="dono_pet" required>

<button type="submit">Cadastrar</button>

</form>

<a href="ListaPet.php">Ver Pets</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>