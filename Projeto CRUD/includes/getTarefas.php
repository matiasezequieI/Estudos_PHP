<?php
//Conectando ao banco de dados

include "db_connect.php";

//Consultando banco de dados
$qryTarefa = mysqli_query($connect, "SELECT * FROM tarefas");
while ($resultado = mysqli_fetch_assoc($qryTarefa)) {
    $vetor[] = array_map('utf8_encode', $resultado);
}

//Passando vetor em forma de json
echo json_encode($vetor);
