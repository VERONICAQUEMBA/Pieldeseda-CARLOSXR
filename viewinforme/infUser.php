
<?php


    /// que carpetas se requieren 
    require_once('../modelo/conexion.php'); 
    require_once('../modelo/consultasinform.php');
    require_once('../controlador/mostrarinform.php'); 


   
?>




<!--
    meteer entre llaves de php
require_once "vistas/parte_superior.php"


//diseño de la base de datos-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piel de seda</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Incluye las bibliotecas de DataTables y Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">






</head>

<body>




<div class="informe">


        <div class="cont-dash-btn">
                <div class="cuadro">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                                <span class="title">Piel de seda</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                                <span class="title">inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                <span class="title">Usuario</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="briefcase-sharp"></ion-icon></span>
                                <span class="title">Productos</span>
                            </a>
                        </li>
                        <li>
                            <a href="../informes.php">
                                <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                                <span class="title">informes</span>
                            </a>

                           
                                <li>
                                    <a href="infVentas.php"><i class="ti-pencil-alt"></i>Informe-VENTAS</a>
                                </li>
                                <li>
                                    <a href="infProve.php"><i class="ti-eye"></i>Informe-PROVEHEDORES</a>
                                </li>
                                <li>
                                    <a href="infProductos.php"><i class="ti-eye"></i>Informe-PRODUCTOS</a>
                                </li>
                                <li>
                                    <a href="infUser.php"><i class="ti-eye"></i>Informe-USUARIO</a>
                                </li>


                           

                        </li>

                        <li>
                            <a href="">
                                <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                                <span class="title">Provedores</span>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>

















    <div class="cont-dash-informe">

                    
                        <div class="top">
                            <div class="toggle">
                                <ion-icon name="grid-sharp"></ion-icon>
                            </div>
                            <!--Buscar-->
                            <div class="buscar">
                                    <label>
                                        <input type="text" placeholder="Buscar">
                                        <ion-icon name="search-sharp"></ion-icon> 
                                    </label>
                            </div>
                        </div>
                        
                    

<!-- holaaa -->
            <div>
                <br>
                    <br>
               <h2>INFORME DE USUARIOS</h2>
                <p>Por favor seleccione la accion por la cual desea sacar un informe</p>
          
            </div>

            



            <div class="card-body">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                         <!-- <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Identificacion</th>
                                                    <th>Nombres</th>
                                                    <th>Apeliddos</th>
                                                    <th>Email</th>
                                                    <th>Roll</th>
                                                    <th>Estado</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>$320,800</td>
                                                    <td>Edinburgh</td>
                                                    <td>$320,800</td>
                                                    
                                                   
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                        <?php
                                           infoUsuario();
                                            
                                        ?>
                                    </div>
                                </div>
                                </div>

   

    <div>

    </div>
    </div>

    
</div>
    

    


   
    <!-- Incluye las bibliotecas de jQuery, DataTables y Buttons -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

   <!-- Incluye las bibliotecas adicionales para PDF y Excel -->
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.excel.min.js"></script>

    <!-- Incluye las bibliotecas de jQuery, DataTables y Buttons -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>



    <script src="lib/xlsx.full.min.js"></script>
    <script src="../botonesjs/boton.js"></script>

    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>






</body>
</html>
    