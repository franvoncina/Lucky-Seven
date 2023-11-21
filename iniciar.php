<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Iniciar sesion</title>
</head>
<body>
  <section class="form-register">
    <form method="post">

    <h4>Iniciar sesion</h4>
    
    <input class="controls" type="email" name="Correo" id="correo" placeholder="Ingrese su Correo"required>
    <input class="controls" type="password" name="Clave" id="correo" placeholder="Ingrese su Contraseña"required>
    
    <input class="botons" type="submit" value="Iniciar">
    
    <p><a href="registrar.php">¿no tenes Cuenta?, registrate </a></p>

    </form>
    <a href="index.php">
      <button>atras</button>
    </a>
  </section>
<?php    
$servidor= "localhost";
$usuario= "root";
$clave="";
$datos="lucky-seven";
$conexion=mysqli_connect($servidor,$usuario,$clave,$datos);
$_POST["Correo"];
$_POST ["Clave"]







?>
</body>
</html>