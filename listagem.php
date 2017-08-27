<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'conexao.php';
    $result = $mysqli->query("SELECT DISTINCT descricao FROM perfil");
    $perfis= mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($perfis);
     ?>
  </body>
</html>
