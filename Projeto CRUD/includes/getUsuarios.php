<?php
//Conectando ao banco de dados

include "db_connect.php";

//Consultando banco de dados
$qryLista = mysqli_query($connect, "SELECT * FROM usuarios");
while ($resultado = mysqli_fetch_assoc($qryLista)) {
    $vetor[] = array_map('utf8_encode', $resultado);
}

//Passando vetor em forma de json
echo json_encode($vetor);
