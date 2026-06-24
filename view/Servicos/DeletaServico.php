<?php

require_once __DIR__ . '/../../controller/ServicoController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new ServicoController())->deletar();

    header("Location: ListaServico.php");
    exit;
}