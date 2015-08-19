<?php 

include('php/conexao.php');
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

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    .noticia {
      border-bottom: 1px dotted #EEE;

    }
    .noticia p {
      text-align: left;
    }
    .educacao a {
      color: #168FE4;
      font-size: 1.5em;

    }
    .entretenimento a {
      color:#DC2DDC;
      font-size: 1.5em;
    }
    .esporte a {
      color:#33EF33;
      font-size: 1.5em;
    }
    .educacao h1 {
      color: #168FE4;
    }
    .entretenimento h1 {
      color: #DC2DDC;
    }
    .esporte h1 {
      color: #33EF33;
    }
    .jumbotron {
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 30px;
    color: inherit;
    background-color:rgba(16, 222, 222, 0.2);
  }

  .navbar-inverse {
    background-color:#1AF1F1;
    border-color: #080808;
  }
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
  }
  .menu
    {
    margin:20px auto;
    position : relative;
    width: 100%;
    height: 43px;
    background:#A2ECE4;;
    font-weight: bold;
    text-align:center;
  }

    
 .menu li
    {
    margin:2px 0 0 0;
    float:left;
    list-style-type: none;

  }

 .menu li a
    {
    color: #777;
    text-decoration: none;
    float: left;
    padding: 10px 20px 10px 20px;
  }

 .menu li a:hover
    {
    color: #000000;
    font-weight:bolder;
  }

 .menu li a.selecionado
    {
    color: #FFFFFF;
    background: #CCCCCC;
    padding: 10px 20px 10px 20px;
  }
  .menu ul{
    margin-left:auto;
    margin-right:auto;
    margin-top:0;
    display:table;
  }
 

    </style>
  </head>

  <body>

 <div class='menu'>

  <ul>

    <li><a href='#' class='selecionado'>INICIO</a></li>

    <li><a href='#'>FOTOS</a></li>

    <li><a href='#'>PROGETOS</a></li>

    <li><a href='#'>NOVIDADES</a></li>

  </ul>


   
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">

      <div class="container">
        <h1>Eu Amo Ebep!</h1>
        <p>Ebep Atalaia uma das escolas que se tornou inovadora neste pequeno munícipio em que vivemos, trazendo inovação,integridade e contribuição na melhor educação profissional para o seu filho.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 educacao ">
          <h1>Educação</h1>
          <!-- Educação -->
           <?php 
        $query = " SELECT * FROM posts where id_categoria = 1 ORDER BY id DESC LIMIT 5 ";
        $sql = mysql_query($query) or die(mysql_error().' Erro ao consultar!');

        while( $result = mysql_fetch_array($sql) ) {
         ?><div class="noticia">
           
            <a href="#"><?php echo $result['titulo']; ?></a>
            <p><?php echo $result['conteudo']; ?></p>
         </div>
        
        <?php } ?>
          <!-- ./Educação -->
        </div>
        <div class="col-md-4 entretenimento ">
          <h1>Entretenimento</h1>
           <!-- Entretenimento -->
           <?php 
        $query = " SELECT * FROM posts where id_categoria = 2 ORDER BY id DESC LIMIT 5 ";
        $sql = mysql_query($query) or die(mysql_error().' Erro ao consultar!');

        while( $result = mysql_fetch_array($sql) ) {
         ?><div class="noticia">
           
            <a href="#"><?php echo $result['titulo']; ?></a>
            <p><?php echo $result['conteudo']; ?></p>
         </div>
        
        <?php } ?>
          <!-- ./Entretenimento -->
        </div>
        <div class="col-md-4 esporte ">
          <h1>Esporte</h1>
           <!-- Esportes -->
           <?php 
        $query = " SELECT * FROM posts where id_categoria = 3 ORDER BY id DESC LIMIT 5 ";
        $sql = mysql_query($query) or die(mysql_error().' Erro ao consultar!');

        while( $result = mysql_fetch_array($sql) ) {
         ?><div class="noticia">
           
            <a href="#"><?php echo $result['titulo']; ?></a>
            <p><?php echo $result['conteudo']; ?></p>
         </div>
        
        <?php } ?>
          <!-- ./Esportes -->
        </div>

  
       

      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
