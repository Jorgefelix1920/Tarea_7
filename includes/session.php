<?php
include_once('../db_connection.php');
include_once('header.php'); //header de la paguina
//include_once('index.php');


?>
  <body>
    <div class="container">
  <div class="jumbotron mt-3">
    <h1><?php echo $mensaje; ?></h1>
    <a class="btn btn-lg btn-primary" href="../index.php" role="button">Snicial Sesión &raquo;</a>
  </div>
</div>
<?php include('footer.php'); //header de la paguina?>
