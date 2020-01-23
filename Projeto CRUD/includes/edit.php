<?php

require "db_connect.php";
$userID = $_GET['GetID'];
$sql = "SELECT * FROM usuarios WHERE id='" . $userID . "'";
$consulta = mysqli_query($connect, $sql);


while ($row = mysqli_fetch_assoc($consulta)) {
    $userID = $row['id'];
    $login = $row['username'];
    $nome = $row['nome'];
    $senha = $row['senha'];
    $email = $row['email'];
    $data_nasc = $row['dataNasc'];
    $info_adicional = $row['infoAdicional'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Atualizar cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>

    <form action="update_cadastro.php?ID=<?php echo $userID ?>" method="post" style="text-align: center;">
        Login: <input type="text" name="login" value="<?php echo $login ?>"><br>
        Nome: <input type="text" name="nome" value="<?php echo $nome ?>"><br>
        Senha: <input type="password" name="senha"><br>
        E-mail: <input type="email" name="email" value="<?php echo $email ?>"><br>
        Data de nascimento: <input type="date" name="data_nascimento" value="<?php echo $data_nasc ?>"><br>
        Informações adicionais: <br>
        <textarea name="texto" rows="10" cols="30"> </textarea>
        <br>
        <button type="submit" name="update" class="btn btn-primary">Atualizar</button>
    </form>

</body>

</html>