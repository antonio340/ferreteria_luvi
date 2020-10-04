<?php



require_once 'index.php';

echo <<<_END

</br>
<h3>NOTA</h3>
<p>Para ingresar debes escribir los datos</br>
creados en la base de datos</p>
<--CREAR NOMBRE Y CONTRASEÑA DESDE LA BASE DE DATOS-->
</br>
<form class="center" name="form1" method="post" action="login2.php">
<p>nombre</p>
  <input type="text" name="login">
  <p>contraseña</p>
  <input type="password" name="password">
  </br>
  </br>
  <button type="submit" class="btn btn-primary">login</button>
  </br>
  </br>
</form>
_END;

 
  
  ?>
