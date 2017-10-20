<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

    <title>Listagem</title>
  </head>
  <body>
    <?php
      include 'conexao.php';
      $result = $mysqli->query("SELECT DISTINCT id, descricao FROM perfil");
      $perfis = mysqli_fetch_all($result, MYSQLI_ASSOC);
     ?>
    <table class="table table-hover">
      <thead>
        <th>Id</th>
        <th>Descrição</th>
      </thead>
      <tbody>
        <?php foreach($perfis as $perfil){   ?>
          <tr>
            <th scope="row"><?php echo $perfil["id"] ?></th>
            <td><?php echo $perfil["descricao"] ?></td>
          </tr>
        <?php  } ?>
      </tbody>
    </table>
  </body>
</html>
