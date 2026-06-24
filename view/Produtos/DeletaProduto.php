<?php

require_once __DIR__ . '/../../controller/ProdutoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new ProdutoController())->deletar();

    header("Location: ListaProduto.php");
    exit;
}