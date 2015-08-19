
<?php 

include('../php/conexao.php');


$nome    =  isset($_POST['nome']) ? $_POST['nome'] : null;

$login   = isset($_POST['login']) ? $_POST['login'] : null;

$email  = isset($_POST['email']) ? $_POST['email'] : null;

$senha  = isset($_POST['senha']) ? $_POST['senha'] : null;

$msg = [];

// verifica se o usuário submeteu o formulário
if (count($_POST) ) {

  if ( empty($nome)) {
    $msg[] = "Campo nome obrigatório";
  }
  if ( empty($login) ) {
    $msg[] = "Campo login obrigatório";

  }
  if ( empty($email) ) {
    $msg[] = "Campo email obrigatório";

  }
  if ( empty($senha) ) {
    $msg[] = "Campo senha obrigatório";

  }
}

if ( !empty($nome) && !empty($login) && !empty($email) && !empty($senha) ) {

  //cria a query para ser executada no banco
  $query = " INSERT INTO usuario 
        (nome, login,email, senha) 
        values ('$nome', '$login', '$email', '$senha') ";
        
        //die($query);
  if (mysql_query($query) or mysql_error()) {
    $msg = "Usuario cadastrado com sucesso!";
  }

}



 ?>
<!DOCTYPE html>
<html lang="pt-br">
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
            <li><a href="post.php">Posts</a></li>
            <li><a href="usuario.php">Usuarios</a></li>
            <li><a href="">Item 3</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Usuário</h1>

          <p> 
            <ul>
            <?php 

              foreach ($msg as $m ) {
                echo "<li>" . $m . "</li>";
              }
           ?>
              
            </ul>
          
         <form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios -->

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="acao"></label>
  <div class="col-md-8">
    <button id="acao" name="acao" class="btn btn-success">Confirmar</button>
    <button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
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
