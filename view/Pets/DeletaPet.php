<?php

require_once __DIR__ . '/../../controller/PetController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    (new PetController())->deletar($_POST['id']);

    header("Location: ListaPet.php");
    exit;
}