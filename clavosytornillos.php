<?php



require_once 'index.php';

$sedaces="";

$conexion = mysqli_connect($host, $user, $password, $dbname);

  if(mysqli_connect_errno()){
    echo "fatal error (connection)";
    exit();
  }

  mysqli_select_db($conexion, $dbname) or die ("no se encuentra la base de datos");

  mysqli_set_charset($conexion,"utf8");

  $consulta="SELECT * FROM productos WHERE categoria LIKE '%clavos%'";

  $resultados=mysqli_query($conexion,$consulta);

  while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){
  
    echo "<table class='tables' width='50%' border='1'><tr><td>";

  echo $fila['producto'] . "</td><td>";
  echo $fila['categoria'] . "</td><td>";
  echo $fila['precio'] . "</td><td>";
  echo $fila['cantidad'] . "</td>";
  $sedaces=$fila['producto'];
  
  echo "<td><a href='comprar.php?Id=$sedaces'><input type='button' value='comprar'></td></table>";
  }

  mysqli_close($conexion);
  require_once 'footer.php';
  ?>