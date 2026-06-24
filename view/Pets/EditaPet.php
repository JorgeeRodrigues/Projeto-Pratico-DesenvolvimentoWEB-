<?php

require_once __DIR__ . '/../../controller/PetController.php';

$controller = new PetController();

$id = $_GET['id'] ?? null;

$pet = $controller->buscarPorId($id);

if (!$pet) {
    header("Location: ListaPet.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $controller->atualizar();

    header("Location: ListaPet.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Pet</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Editar Pet</h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $pet->getId() ?>">

<label>Nome</label>
<input type="text" name="nome_pet" value="<?= $pet->getNomePet() ?>" required>

<label>Espécie</label>
<input type="text" name="especie" value="<?= $pet->getEspecie() ?>" required>

<label>Idade</label>
<input type="number" name="idade" value="<?= $pet->getIdade() ?>" required>

<label>Dono</label>
<input type="text" name="dono_pet" value="<?= $pet->getDonoPet() ?>" required>

<button type="submit">Salvar</button>

</form>

</div>

</body>
</html>