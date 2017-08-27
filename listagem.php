<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'conexao.php';
    $result = $mysqli->query("SELECT DISTINCT id, descricao FROM perfil");
    $perfis = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo "<pre>"; print_r($perfis); echo "</pre>";
     ?>
    <table>
      <thead>
        <th>id</th>
        <th>descricao</th>
      </thead>
      <tbody>
        <?php foreach($perfis as $perfil){   ?>
          <tr>
            <td><?php echo $perfil["id"] ?></td>
            <td><?php echo $perfil["descricao"] ?></td>
          </tr>
      <?php  }
         ?>
      </tbody>
    </table>
  </body>
</html>
