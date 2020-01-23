<?php

require "db_connect.php";

if (isset($_POST['signup-tarefa'])) {
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $status = mysqli_escape_string($connect, $_POST['status']);

    $sql = "INSERT INTO tarefas (titulo, descricao, status) VALUES ('$titulo', '$descricao','$status')";

    $consulta = mysqli_query($connect, $sql);

    $row = mysqli_affected_rows($connect);

    if ($row == 1) {
        echo "Tarefa cadastrada com sucesso";
    } else {
        echo "Falha ao concluir cadastro";
    }
    echo "</br> <a href='../home.html'><button> Voltar P/ Cadastro </button></a>";
    echo "<a href='../index.html'><button> Voltar Menu login</button></a>";
}
