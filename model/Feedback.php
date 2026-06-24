<?php

require_once "../controller/FeedbackController.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $controller = new FeedbackController();
    $controller->salvar($_POST);

    header("Location: FeedbackLista.php");
}