
<?php 

include('../php/conexao.php');
include('../php/funcoes.php');


$nome    =  isset($_POST['nome']) ? $_POST['nome'] : null;


$cpf    =  isset($_POST['cpf']) ? $_POST['cpf'] : null;


$data_nascimento =  isset($_POST['data_nascimento']) ?  : null;


$login   = isset($_POST['login']) ? $_POST['login'] : null;

$email  = isset($_POST['email']) ? $_POST['email'] : null;

$senha  = isset($_POST['senha']) ? $_POST['senha'] : null;
$confirma_senha  = isset($_POST['confirma_senha']) ? $_POST['confirma_senha'] : null;


$msg = [];

// verifica se o usuário submeteu o formulário
if (count($_POST) > 0) {

  if ( empty($nome)) {
    $msg[] = "Campo nome obrigatório";
  }

  if ( empty($cpf)) {
    $msg[] = "Campo cpf obrigatório";
  }
  if (validaJaCadastrado('usuario', 'cpf', $cpf)) {
    $msg[] = "CPF já cadastrado!";
  }

  if ( empty($data_nascimento)) {
    $msg[] = "Campo data de nascimento obrigatório";
  }
  
  if ( empty($email) ) {
    $msg[] = "Campo email obrigatório";
  }

  if ( empty($login) ) {
    $msg[] = "Campo login obrigatório";
  }

  if ( empty($senha) ) {
    $msg[] = "Campo senha obrigatório";

  }
  if ( strcmp($confirma_senha, $senha) != 0) {
    $msg[] = "Por favor digite a mesma senha nos campos senha e confirma senha ";

  }
}

if ( !empty($nome) && !empty($login) && !empty($email) && !empty($senha) && !empty($cpf) && !empty($data_nascimento) && count($msg) == 0 ) {

  //cria a query para ser executada no banco
  $query = " INSERT INTO usuario 
        (nome, cpf, data_nascimento, login,email, senha) 
        values ('$nome','$cpf', '$data_nascimento', '$login', '$email', '$senha') ";
        
        //die($query);
  if (mysql_query($query) or mysql_error()) {
    $msg[] = "Usuario cadastrado com sucesso!";
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
          
          <!-- Menu principal -->
          <?php include('estrutura/menu.php'); ?>
          <!-- /Menu principal -->
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Usuário</h1>

          <p> 
            <ul>
            <?php 

              for ($i = 0; $i < count($msg) ; $i++) {
                echo "<li>" . $msg[$i] . "</li>";
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
  <label class="col-md-4 control-label" for="cpf">Cpf</label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data_nascimento">Data de nascimento</label>  
  <div class="col-md-4">
  <input id="data_nascimento" name="data_nascimento" type="date" placeholder="" class="form-control input-md">
    
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
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirma_senha">Confirmar senha</label>
  <div class="col-md-4">
    <input id="confirma_senha" name="confirma_senha" type="password" placeholder="" class="form-control input-md">
    
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
