
<?php 

include('../php/conexao.php');


$titulo     =  isset($_POST['titulo']) ? $_POST['titulo'] : null;

$conteudo   = isset($_POST['conteudo']) ? $_POST['conteudo'] : null;

$categoria  = isset($_POST['categoria']) ? $_POST['categoria'] : null;

$msg = '';

if ( empty($titulo) ) {
  $msg += "Campo titulo obrigatório <br>";
}
if ( empty($conteudo) ) {
  $msg += "Campo conteúdo obrigatório <br>";

}

if ( !empty($titulo) && !empty($conteudo) ) {
  //recebe data atual
  $dataAtual = date('Y-m-d H:i:s');
  //cria a query para ser executada no banco
  $query = " INSERT INTO posts 
        (titulo, conteudo, id_categoria, data_postagem) 
        values ('$titulo', '$conteudo', $categoria, '$dataAtual') ";
        
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
          
          <!-- Menu principal -->
          <?php include('estrutura/menu.php'); ?>
          <!-- /Menu principal -->
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Posts</h1>

          <p> <?php echo $msg; ?></p>
          
          <form class="form-horizontal" method="post" >
            <fieldset>

            <!-- Form Name -->
            <legend>Cadastro de Post</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="titulo">Titulo</label>  
              <div class="col-md-4">
              <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md">
                
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="conteudo">Conteúdo</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="conteudo" name="conteudo"></textarea>
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="categoria">Categoria</label>
              <div class="col-md-4">
                <select id="categoria" name="categoria" class="form-control">
                  <?php
                    $query = " SELECT * from categoria";
                    $sql = mysql_query($query);
                    while($rs = mysql_fetch_array($sql)) {
                  ?>
                  <option value="<?php echo $rs['id']; ?>"><?php echo $rs['nome']; ?></option>
                  <?php } ?>
                </select>
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
