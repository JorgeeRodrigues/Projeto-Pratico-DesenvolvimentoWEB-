<?php

require_once __DIR__ . '/../../controller/ClienteController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    (new ClienteController())->deletar($_POST['id']);

    header("Location: ListaCliente.php");
    exit;
}