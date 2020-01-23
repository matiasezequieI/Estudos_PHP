<?php

require "db_connect.php";
if (isset($_POST['update'])) {
    $userID = $_GET['ID'];
    $login = $_POST['login'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nascimento'];
    $info_adicional = $_POST['texto'];

    $sql = "UPDATE usuarios SET username = '" . $login . "', nome = '" . $nome . "', email = '" . $email . "', senha = '" . $senha . "', dataNasc = '" . $data_nasc . "', infoAdicional = '" . $info_adicional . "' WHERE id= '" . $userID . "'";
    $consulta = mysqli_query($connect, $sql);

    if ($consulta) {
        header("Location: listaUsuario.php");
    } else {
        echo "checar consulta";
    }
} else {
    header("Location: listaUsuario.php");
}
