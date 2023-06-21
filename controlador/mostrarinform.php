<?php
    
                function infoUsuario(){
                    $consultas = new Consultasinfor();
                    $filas = $consultas -> cargarUsers();
                        if(!isset($filas)){
                            echo'<h2>No existe ningun usuario.</H2>';
                        }else{
                            echo'
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                <th>ID CEDULA</th>
                                                <th>NOMBRES</th>
                                                <th>APELLIDOS</th>
                                                <th>TELEFONO</th>
                                                <th>EMAIL</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    
                                    foreach ($filas as $rows) {
                                        echo '<tr>
                                            <td>'.$rows['idcedula'].'</td>
                                            <td>'.$rows['nombres'].'</td>
                                            <td>'.$rows['apellidos'].'</td>
                                            <td>'.$rows['telefono'].'</td>
                                            <td>'.$rows['email'].'</td>
                                            
                                        
                                        </tr>';

                                    }
                                    echo"</table>
                                        <tbody>";
                                }
                }

                function inforProduct(){
                    $consultas = new Consultasinfor();
                    $filas = $consultas -> cargarProduct();
            
                        if(!isset($filas)){
                            echo'<h2>No existe ningun Poducto.</H2>';
                        }else{
                            echo'
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                <th>ID PRODUCTO</th>
                                                <th>NOMBRE</th>
                                                <th>DESCRIPCION</th>
                                                <th>STOCK</th>
                                                <th>PRECIO</th>
                                                <th>CATEGORIA</th>
                                                <th>ID_FACTURA_PROVEDOR</th>
                                                
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    
                                    foreach ($filas as $rows) {
                                        echo '<tr>
                                            <td>'.$rows['idproducto'].'</td>
                                            <td>'.$rows['nombre'].'</td>
                                            <td>'.$rows['descripcion'].'</td>
                                            <td>'.$rows['stock'].'</td>
                                            <td>'.$rows['precio'].'</td>
                                            <td>'.$rows['categoria'].'</td>
                                            <td>'.$rows['factura_proveedor_idfactura_proveedor'].'</td>
                                        </tr>';
            
                                    }
                                    echo"</table>
                                         <tbody>";
                                }
                }

                function inforProveed(){
                                $consultas = new Consultasinfor();
                                $filas = $consultas -> cargarProveed();
                        
                                    if(!isset($filas)){
                                        echo'<h2>No existe ningun Poducto.</H2>';
                                    }else{
                                        echo'
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                            <th>ID PROVEEDOR</th>
                                                            <th>NOMBRE</th>
                                                            <th>APELLIDOS</th>
                                                            <th>TELEFONO</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                                
                                                foreach ($filas as $rows) {
                                                    echo '<tr>
                                                        <td>'.$rows['idproveedor'].'</td>
                                                        <td>'.$rows['nombres'].'</td>
                                                        <td>'.$rows['apellidos'].'</td>
                                                        <td>'.$rows['telefono'].'</td>
                                                     </tr>';
                        
                                                }
                                                echo"</table>
                                                     <tbody>";
                                            }
                }

                function inforVentas(){
                    $consultas = new Consultasinfor();
                    $filas = $consultas -> cargarVentas()   ;
            
                        if(!isset($filas)){
                            echo'<h2>No existe ningun Poducto.</H2>';
                        }else{
                            echo'
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                <th>ID FACTURA</th>
                                                <th>FECHA</th>
                                                <th>ID DEL PRODUCTO</th>
                                                <th>ID METODO DE PAGO</th>




                                                <th>ID CLIENTE</th>
                                                
                                                <th>CANTIDAD DE PRODUCTOS</th>
                                               

                                                <th>SUBTOTAL</th>
                                                <th>TOTAL</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    
                                    foreach ($filas as $rows) {
                                        echo '<tr>
                                            <td>'.$rows['idfactura'].'</td>
                                            <td>'.$rows['fecha'].'</td>
                                            <td>'.$rows['producto_idproducto'].'</td>
                                            <td>'.$rows['metodo_de_pago_idmetodo_de_pago'].'</td>
                                            <td>'.$rows['rol_idRol'].'</td>
                                            <td>'.$rows['catidad_produc'].'</td>
                                            <td>'.$rows['subtotal'].'</td>
                                            <td>'.$rows['total'].'</td>
                                         </tr>';
            
                                    }
                                    echo"</table>
                                         <tbody>";
                                }
    }

 

?>