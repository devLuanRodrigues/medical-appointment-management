<?php

use controller\PacienteController;

require_once __DIR__ . "/../controller/PacienteController.php";

$pacienteController = new PacienteController();
$action = isset($GET["action"]) ? $GET["action"] : "listar";

switch ($action) {
    case "criar":
        $pacienteController->criar();
        break;
    case "editar":
        $pacienteController->editar();
        break;
    case "excluir":
        $pacienteController->excluir();
        break;
    case "listar":
    default:
        $pacienteController->listar();
        break;
}