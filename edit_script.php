<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
       <?php 
          include "conexao.php";
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $endereco = $_POST['endereco'];
          $telefone = $_POST['telefone'];
          $email = $_POST['email'];
          $dt_nascimento = $_POST['dt_nascimento'];

        // $sql = "INSERT INTO `pessoas`( `nome`, `endereco`, `telefone`, `email`, `dt_nascimento`) VALUES('$nome','$endereco','$telefone','$email','$dt_nascimento')";

          $sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` ='$endereco', `telefone` ='$telefone', `email` ='$email', `dt_nascimento` ='$dt_nascimento' WHERE cod_pessoa = $id";

        if (mysqli_query($conn, $sql)) {
            mensagem("$nome alterado com sucesso!", 'success');
        } else
           mensagem("$nome NÂO alterado!", 'danger');

       ?>
       <hr>
       <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>