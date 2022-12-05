<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
         <h1>Cadastro</h1>
         <form action="cadastro_script.php" method="POST">
           <div class="form-group">
               <label for="nome">Nome Completo</label>
               <input type="text" class="form-control" name="nome" required> 
             </div>
             <div class="form-group">
                 <label for="endereco">Endereço</label>
                 <input type="text" class="form-control" name="endereco" required> 
               </div>
               <div class="form-group">
                   <label for="telefone">Telefone</label>
                   <input type="text" class="form-control" name="telefone" required>
                 </div>
                 <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email"  class="form-control" name="email" required> 
          </div>
           <div class="form-group">
               <label for="dt_nascimento">Data Nascimento</label>
               <input type="date"  required dt_nascimento=dt_nascimento/ class="form-control" name="dt_nascimento" required>
            </div>
            <br>
             <div class="form-group">
             <input type="submit" class="btn btn-primary btn=success"> 
         </form>
         <a href="index.php" class="btn btn-primary">Voltar para o inicío</a> 
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>