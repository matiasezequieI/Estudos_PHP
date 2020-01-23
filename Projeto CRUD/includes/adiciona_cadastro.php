<?php

require "db_connect.php";

if (isset($_POST['signup-submit'])) {
    $login = mysqli_escape_string($connect, $_POST['login']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $data_nasc = mysqli_escape_string($connect, $_POST['data_nascimento']);
    $info_adicional = mysqli_escape_string($connect, $_POST['texto']);

    $sql = "INSERT INTO usuarios (username, nome, senha, email, dataNasc, infoAdicional) VALUES ('$login', '$nome','$senha','$email','$data_nasc','$info_adicional')";

    $consulta = mysqli_query($connect, $sql);

    $row = mysqli_affected_rows($connect);

    if ($row == 1) {
        echo "Cadastro finalizado com sucesso";
    } else {
        echo "Falha ao concluir cadastro";
    }
    echo "</br>";
    echo "<a href='../home.html'><button> Voltar P/ Home </button></a>";
    echo "<a href='../index.html'><button> Voltar Menu login</button></a>";
}
