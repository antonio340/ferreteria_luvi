<?php 
 require "vendor/autoload.php";

 echo <<<_INIT
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>                 
<script src='node_modules/jquery/dist/jquery.min.js'></script>
<script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='estilo.css' type='text/css'>
<link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">        
<link rel='stylesheet' href='styles.css' type='text/css'>    
<script src='javascript.js'></script>
_INIT;
require_once 'functions.php';






echo <<<_END
<title>Ferreteria Luvi</title>


    <div id='logo' class='center'>
     <img id='robin' src='logo.png' height="200px" width="200px"> Ferreteria Luvi
    </div>
    <body background="fondo.jpg">
    
</head>
<body>
_END;

session_start();
if(!isset($_SESSION["usuario"]))
{
   echo <<<_SHUEK
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
   <a class="navbar-brand" href="inicio.php">INICIO</a> 
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="todos.php">todos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="herramientas.php">herramientas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="clavosytornillos.php">clavos y tornillos <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="electricos.php">electricos <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="login.php">login <span class="sr-only">(current)</span></a>
  </li>
    </ul>
    <form action="pagina_busqueda.php" method="get"class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="escribe" aria-label="Search" name="buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
 </nav>
_SHUEK;
}else{
  echo <<<_LOGGEDIN
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
    <a class="navbar-brand" href="inicio.php">INICIO</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="todos.php">todos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="herramientas.php">herramientas <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="clavosytornillos.php">clavos y tornillos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="electricos.php">electricos <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="crearobjetopart1.php">agregar <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="destruirobjeto1.php">eliminar <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="editarobjeto1.php">editar <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="logout.php">log out <span class="sr-only">(current)</span></a>
    </li>
      </ul>
      <form action="pagina_busqueda.php" method="get"class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="escribe" aria-label="Search" name="buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  _LOGGEDIN;
}





echo <<<_END2


</body>
</html>

_END2;

?>