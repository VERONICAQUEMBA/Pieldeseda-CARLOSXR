<?php
    class Consultasinfor{

        
                public function cargarUsers(){
                    //
                        $rows = null;     //almacenar los datos
                        $modelo = new Conexion();
                        $conexion = $modelo->get_conexion();
                        $sql = "select * from usuario";
                        $statement = $conexion->prepare($sql);
                        $statement ->execute();
                        
                        
                        while ($result = $statement->fetch()) {

                            $rows[] =$result;
                        }

                        return $rows;
                }
        
            
                public function cargarProduct(){
                    $rows = null;     //almacenar los datos
                    $modelo = new Conexion();
                    $conexion = $modelo->get_conexion();
                    $sql = "select * from producto";
                    $statement = $conexion->prepare($sql);
                    $statement ->execute();
                    
                    
                    while ($result = $statement->fetch()) {
                        
                        $rows[] =$result;
                    }
    
                    return $rows;
                }
                
                public function cargarProveed(){
                        $rows = null;     //almacenar los datos
                        $modelo = new Conexion();
                        $conexion = $modelo->get_conexion();
                        $sql = "select * from proveedor";
                        $statement = $conexion->prepare($sql);
                        $statement ->execute();
                        
                        
                        while ($result = $statement->fetch()) {
                            
                            $rows[] =$result;
                        }
        
                        return $rows;
                }

                public function cargarVentas(){
                        
                            $rows = null;     //almacenar los datos
                            $modelo = new Conexion();
                            $conexion = $modelo->get_conexion();
                            $sql = "select * from factura";
                            $statement = $conexion->prepare($sql);
                            $statement ->execute();
                            
                            
                            while ($result = $statement->fetch()) {
                                
                                $rows[] =$result;
                            }
            
                            return $rows;
                }


        



            
             }



?>