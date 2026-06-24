<?php

require_once __DIR__ . '/../../controller/FeedbackController.php';

$feedbacks = (new FeedbackController())->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Feedbacks</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>

<div class="container">

<h2>Feedbacks Recebidos</h2>

<?php if ($feedbacks): ?>

    <?php foreach ($feedbacks as $f): ?>

        <div class="feedback">
            <h4><?= $f['nome'] ?></h4>
            <p><?= $f['mensagem'] ?></p>
            <strong>Nota: <?= $f['nota'] ?></strong>
            <hr>
        </div>

    <?php endforeach; ?>

<?php else: ?>

    <p>Nenhum feedback encontrado.</p>

<?php endif; ?>

<a href="FeedbackCadastrar.php">Novo Feedback</a>
<a href="../../index.php">Voltar para a Página Inicial</a>

</div>

</body>
</html>