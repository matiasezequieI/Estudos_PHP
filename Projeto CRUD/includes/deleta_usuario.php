<?php
require "db_connect.php";

if (isset($_GET['Del'])) {
    $userID = $_GET['Del'];
    $sql = "DELETE FROM usuarios where id = '" . $userID . "'";
    $consulta = mysqli_query($connect, $sql);

    if ($consulta) {
        header("Location: listaUsuario.php");
    } else {
        echo "checar consulta";
    }
} else {
    header("Location: listaUsuario.php");
}
