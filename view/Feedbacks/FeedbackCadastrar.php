<?php

require_once __DIR__ . '/../../controller/FeedbackController.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    (new FeedbackController())->salvar($_POST);

    header("Location: FeedbackLista.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Feedback</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Enviar Feedback</h2>

<form method="POST">

<label>Nome</label>
<input name="nome" required>

<label>Mensagem</label>
<textarea name="mensagem" required></textarea>

<label>Nota</label>
<select name="nota">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<button type="submit">Enviar Feedback</button>

</form>

<a href="FeedbackLista.php">Ver Feedbacks</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>