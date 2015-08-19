
<?php 

require_once('../php/conexao.php');

if ( isset($_GET['del']) && $_GET['del'] != '')  {
  
  $id = $_GET['del'];

  $query = " DELETE FROM usuario WHERE id = $id ";
  mysql_query($query);

}


$query  = " SELECT * from usuario ORDER BY id DESC ";
$sql    = mysql_query($query) or die(mysql_error());

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

    <title>Usuarios</title>

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
          <h1 class="page-header">Usuarios</h1>

          <a href="create-usuario.php" class="btn btn-primary pull-right">
            <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
            Novo
          </a>

          
          <!-- th = linha, td= coluna -->
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome do Usuario</th>
                <th>Login</th>
                <th>Email</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody>
            <?php
              while($rs = mysql_fetch_array($sql)) {
             ?>
              <tr>
                <td><?php echo $rs['id']; ?></td>
                <td><?php echo $rs['nome']; ?></td>
                <td><?php echo $rs['login']; ?></td>
                <td><?php echo $rs['email']; ?></td>
                <td> 
                 <a href="edit-usuario.php?id=<?php echo $rs['id']; ?>">Editar</a> 
                  <a href="?del=<?php echo $rs['id']; ?>">Excluir</a>
                  </td>
              </tr>
              <?php } ?>
            </tbody>

          </table>

            
          

        
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
