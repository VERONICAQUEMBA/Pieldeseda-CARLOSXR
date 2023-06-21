<?php
// Esta línea incluye el archivo `conexion.php` contiene la  conexión de la base de datos
//  `require_once` asegura que el archivo se incluya solo una vez y evita errores 
require_once 'modelo/conexion.php';     

// var_dump` es una función de depuración en PHP que muestra información sobre una variable.
// Esta línea muestra el contenido del arreglo `$_POST`, que contiene los datos enviados a través de una petición HTTP utilizando el método POST
var_dump($_POST);

// Verifica si se enviaron los valores de email y password en el formulario 

if (isset($_POST['email']) && isset($_POST['password'])) {
  // Obtener los valores ingresados en el formulario del login----------------
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hacer conexión con la base de datos
  $conexion = new Conexion();
  $conn = $conexion->get_conexion();

  // Verificar el email y la contraseña en la base de datos --------------

  // Estas líneas preparan y ejecutan una consulta SQL parametrizada para verificar si el 
  // correo electrónico y la contraseña ingresados coinciden en la base de datos. Se utiliza
  //  un marcador de posición `:email` y `:password` en la consulta, que luego se vinculan a
  //   las variables `$email` y `$password` utilizando el método `bindParam()`. La consulta se
  //    ejecuta utilizando el método `execute()` del objeto preparado `$stmt`
  $sql = "SELECT * FROM usuario WHERE email=:email AND password=:password";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->execute();


  // Esta condición verifica si la consulta devolvió exactamente una fila de resultado.
  //  Si es así, significa que el correo electrónico y la contraseña coinciden y se ejecuta
  //   el bloque de código dentro de esta condición.
  if ($stmt->rowCount() == 1) {
   // Inicio de sesión exitosooooooo
session_start();
$_SESSION['email'] = $email;
header("Location: dashboard.php?login=success");
exit();
  } else {
    // lo que digito el usuario mal - redirige a la página de inicio de sesión con mensaje de error
    header("Location: index.php?error=1");
    exit();
  }
} else {
  // Los campos de email y/o password no se enviaron - redirige a la página de inicio de sesión
  header("Location: index.php");
  exit();
}
?>