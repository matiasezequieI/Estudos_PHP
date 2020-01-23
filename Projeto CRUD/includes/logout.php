<?php

// inicia sessão
session_start();

// elimina todas as informações relacionadas à sessão atual
session_destroy();

// encerra o manipulador de sessão
session_write_close();


echo "Usuário deslogado! <br><br>";

echo "</br> <a href='../index.html'><button> Voltar login </button></a>";

?>