<?php
session_start();
if (isset($_POST["login"])) {
    require "db_connect.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha= '$senha'";

    $consulta = mysqli_query($connect, $sql); // executa a consulta apos fazer conexão

    $row = mysqli_num_rows($consulta); //consulta de registro na tabela

    if ($row > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;

        header("Location: ../home.html");
    } else {
        echo "Erro no login<br/>";
        header("Location: ../index.html");
    }
    mysqli_close($connect);
}
