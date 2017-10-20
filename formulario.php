<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Formulário</title>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" action="recebe-dados.php" method="post">
        <h1>Formulário de descrição</h1>
        <br>
        <label for="descricao" class="">Descrição:</label>
        <input class="form-control" type="text" name="descricao" maxlength="255" required>
        <br>
        <button class="btn btn-md btn-primary" type="submit">Enviar</button>
      </form>
    </div>
  </body>
</html>
