<?php

require_once "../config/MySQLConnector.php";
require_once "../models/Doente.php";

$mySQLConnector     = new MySQLConnector();
$dataBaseConnection = $mySQLConnector->getConnection();
$doenteModel        = new Doente($dataBaseConnection);

// diagnosticar

if (isset($_POST['submeter'])) {
    $nome        = $_POST['nome'];
    $idade       = $_POST['idade'];
    $sintomas    = $_POST['sintomas'];
    $diagnostico = $_POST['diagnostico'];

    $retornoCriar = $doenteModel->criar($nome, $idade, $sintomas, $diagnostico);

    if ($retornoCriar == true) {
        $msgDoenteCriado = "doente criado com sucesso!";
    } else {
        $msgDoenteCriado = "sem sucesso!";
    }
}

// listar

$doentes = $doenteModel->listar();

// apagar

if (isset($_GET['id_apagar'])) {
    $doenteModel->remover($_GET['id_apagar']);
    header("location: listar.php");
}

// actualizar

if (isset($_GET['id_editar'])) {
    $doente = $doenteModel->listarUm($_GET['id_editar']);
}

if (isset($_POST['actualizar'])) {
    $nome        = $_POST['nome'];
    $idade       = $_POST['idade'];
    $sintomas    = $_POST['sintomas'];
    $diagnostico = $_POST['diagnostico'];

    $retornoatualizar = $doenteModel->actualizar(
        $_GET['id_editar'], 
        $nome,
        $idade,
        $sintomas,
        $diagnostico
    );
    if ($retornoatualizar == true) {
        $msgDoenteatualizar = "doente atualizado com sucesso!";
    } else {
        $msgDoenteatualizar = "sem sucesso na atualizacao!";
    }
}
