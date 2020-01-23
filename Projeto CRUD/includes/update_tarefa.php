<?php

require "db_connect.php";
if (isset($_POST['update'])) {
    $tarefaID = $_GET['ID'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $sql = "UPDATE tarefas SET titulo = '" . $titulo . "', descricao = '" . $descricao . "', status = '" . $status . "' WHERE id = '" . $tarefaID . "'";
    $consulta = mysqli_query($connect, $sql);

    if ($consulta) {
        header("Location: listaTarefa.php");
    } else {
        echo "checar consulta";
    }
} else {
    header("Location: listaTarefa.php");
}
