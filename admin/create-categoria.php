
<?php 

include('../php/conexao.php');


$nome     =  isset($_POST['nome']) ? $_POST['nome'] : null;


$msg = '';

if ( empty($nome) ) {
  $msg += "Campo nome obrigatório <br>";
}

if ( !empty($nome) ) {
  //recebe data atual
  //cria a query para ser executada no banco
  $query = " INSERT INTO categoria
        (nome) 
        values ('$nome') ";
        
        //die($query);
  if (mysql_query($query) or mysql_error()) {
    $msg = "Matéria postada com sucesso!";
  }

}



 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          
          <ul class="nav nav-sidebar">
            <li><a href="categoria.php">Categoria</a></li>
            <li><a href="create-categoria.php">Cadastrar Categoria </a></li>
            <li><a href="http://localhost/bootstrap/page1.php#">Hello Word</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Categoria</h1>

          <p> <?php echo $msg; ?></p>
          
          <form class="form-horizontal" method="post" >
            <fieldset>

            <!-- Form Name -->
            <legend>Cadastro de Categoria</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nome">Nome</label>  
              <div class="col-md-4">
              <input id="nome" name="nome" type="text" placeholder="nome" class="form-control input-md">
                
              </div>
            </div>

          
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="postar"></label>
              <div class="col-md-4">
                <button id="postar" name="postar" class="btn btn-primary">Postar</button>
              </div>
            </div>

            </fieldset>
            </form>
          
  
        
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
