<?php

require "db_connect.php";
$tarefaID = $_GET['GetID']; 
$sql = "SELECT * FROM tarefas WHERE id='" . $tarefaID . "'";
$consulta = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($consulta)) {
    $tarefaID = $row['id'];
    $titulo = $row['titulo'];
    $descricao = $row['descricao'];
    $status = $row['status'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estudo - SETI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>

    <form action="update_tarefa.php?ID=<?php echo $tarefaID ?>" method="post" style="text-align: center; margin-top: 50px;">
        Título: <input type="text" name="titulo" value="<?php echo $titulo ?>"><br><br>
        Descrição: <input type="text" name="descricao" value="<?php echo $descricao ?>"><br><br>
        Status: <select name="status" value="<?php echo $status ?>">
            <option>A fazer</option>
            <option>Em progresso</option>
            <option>Pausado</option>
            <option>Completo</option>
        </select>
        <br><br>
        <button type="submit" name="update" class="btn btn-primary">Cadastrar</button>
    </form>

</body>

</html>