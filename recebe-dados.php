<?php
include 'conexao.php';
var_dump($_POST);

if (isset($_POST["descricao"]) && !empty($_POST["descricao"])) {
  $mysqli->query("INSERT INTO perfil(descricao) VALUES ('". $_POST["descricao"] ."')");
}

?>
