<?php
session_start();

// esto es para verificar si el usuario ha iniciado sesión correctamente
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Verifica si hay un mensaje de inicio de sesión exitoso en la URL
if (isset($_GET['login']) && $_GET['login'] === 'success') {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js'></script>";
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: '¡Bienvenido!',
      text: 'Inicio de sesión exitoso.',
      confirmButtonText: 'Aceptar'
    });
  </script>";
}
?>

<!-- de aqui para bajo va el contenido del dashboard  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Pieldeseda-CARLOSXR/img/logo.png" type="image/png">

    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/dashboard.css">
    <!-- CUSTOM JS -->
    <script src="" defer>
        
        enlacesMenu.forEach(enlace => {
            enlace.addEventListener("click", () => {
                menuDashboard.classList.add("open")
                iconoMenu.classList.replace("bx-menu", "bx-x")
            })
        })
        
        </script>
</head>

<body >
    
    
    <div class="menu-dashboard">
        <div class="input-search">
            <i class='bx bx-search'></i>
            <h1>Buscar</h1>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="../Pieldeseda-CARLOSXR/img/logo.png" alt="">
                <h1>PIEL DE SEDA</h1>
                <span>Pieldeseda</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
            <!-- INPUT SEARCH -->
        </div>
        <!-- MENU -->
        <div class="menu">
            
            <div class="enlace">
                <i class='bx bx-clinic'></i>
                <span>Inicio</span>
            </div>
            
            <div class="enlace">
                <i class="bx bx-user"></i>
                <span>Usuario</span>
            </div>
            
            <div class="enlace">
                <i class='bx bx-package'></i>
                <span>Productos</span>
            </div>
            
            <div class="enlace">
                <i class='bx bx-clipboard'></i>
                <span>Provedor</span>
            </div>
            
            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span>Pedidos</span>
            </div>
            
            <div class="enlace">
                <i class='bx bx-exit'></i>
                <span>Salida</span>
            </div>
            
        </div>
    </div>
    
</body>
</html>