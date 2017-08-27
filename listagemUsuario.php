<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'conexao.php';
      $result = $mysqli->query("SELECT DISTINCT id, nome, email, data_cadastro FROM usuario");
      $usuarios = mysqli_fetch_all($result, MYSQLI_ASSOC);
     ?>
     <table>
       <thead>
         <th>id</th>
         <th>nome</th>
         <th>email</th>
         <th>data_cadastro</th>
       </thead>
       <tbody>
         <?php foreach ($usuarios as $usuario) {?>
         <tr>
           <td><?php echo $usuario["id"] ?></td>
           <td><?php echo $usuario["nome"] ?></td>
           <td><?php echo $usuario["email"] ?></td>
           <td><?php echo $usuario["data_cadastro"] ?></td>
         </tr>
       <?php  }
          ?>
       </tbody>
     </table>

  </body>
</html>
