<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <title>Login Piel de Seda</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="POST" id="loginForm">
                    <h2>Login</h2>
                    <div class="inputbox" >
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <button type="submit" id="ingresarButton">Ingresar</button>
                    <div class="forget">
                        <label for=""><input type="checkbox"> Recuérdame</label>
                        <a href="">olvido su contraseña</a>
                    </div>
                </form>
            </div>
        </div>
    </section>



<?php
// envia un alert en pantalla diciendo Email y/o password incorrectos, volver a intentarlo y boton de aceptar 
if (isset($_GET['error']) && $_GET['error'] == 1) {
  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js'></script>";
  echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Email y/o password incorrectos',
      text: 'Vuelve a intentarlo.',
      confirmButtonText: 'Aceptar'
    });
  </script>";
}
// // Verifica si hay un mensaje de inicio de sesión exitoso en la URL
// if (isset($_GET['login']) && $_GET['login'] === 'success') {
//     echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js'></script>";
//     echo "<script>
//       Swal.fire({
//         icon: 'success',
//         title: '¡Bienvenido!',
//         text: 'Se encuentra en la base de datos Piel de Seda.',
//         confirmButtonText: 'Aceptar'
//       });
//     </script>";
//   }
?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>