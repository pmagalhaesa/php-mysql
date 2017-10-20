<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

    <title>Listagem de Usuários</title>
  </head>
  <body>
    <?php
      include 'conexao.php';
      $result = $mysqli->query("SELECT DISTINCT id, nome, email, data_cadastro FROM usuario");
      $usuarios = mysqli_fetch_all($result, MYSQLI_ASSOC);
     ?>
     <table class="table table-hover">
       <thead class="thead-inverse">
         <th>Id</th>
         <th>Nome</th>
         <th>E-mail</th>
         <th>Data Cadastro</th>
       </thead>
       <tbody>
         <?php foreach ($usuarios as $usuario) {?>
         <tr>
           <th scope="row"><?php echo $usuario["id"] ?></th>
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
