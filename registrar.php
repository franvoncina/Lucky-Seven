<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <form method="post">

    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="Nombre" id="nombres" placeholder="Ingrese su Nombre" required>
    <input class="controls" type="text" name="Apellido" id="apellidos" placeholder="Ingrese su Apellido"required>
    <input class="controls" type="email" name="Correo" id="correo" placeholder="Ingrese su Correo"required>
    <input class="controls" type="password" name="Clave" id="correo" placeholder="Ingrese su Contraseña"required>
    <p style="font-size: medium;"><input type="checkbox" name="" id=""> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar">
    
    <p><a href="iniciar.php">¿Ya tengo Cuenta?</a></p>

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
$NOMBRE=$_POST["Nombre"];
$APELLIDO=$_POST["Apellido"];
$CORREO=$_POST["Correo"];
$CLAVE=$_POST["Clave"];

$SQL="insert into usario values ('$NOMBRE','$APELLIDO','$CORREO','$CLAVE')";
$CONSULTA=mysqli_query($conexion,$SQL);


header("Location: /Lucky_Seven/juego.php");

?>
</body>
</html>


      



      


      