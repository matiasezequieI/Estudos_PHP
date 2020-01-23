<?php
require "db_connect.php";

if (isset($_GET['Del'])) {
    $tarefaID = $_GET['Del'];
    $sql = "DELETE FROM tarefas where id = '" . $tarefaID . "'";
    $consulta = mysqli_query($connect, $sql);

    if ($consulta) {
        header("Location: listaTarefa.php");
    } else {
        echo "checar consulta";
    }
} else {
    header("Location: listaTarefa.php");
}
