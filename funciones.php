<?php
require_once "conexion.php";
class Ventas{

    /**
     * Esta función devuelve un array con los datos de los comerciales
     * 
     * @return array
     */
    

    public function getComerciales(){
        $conexion = Conexion::connectDB();
        $query = "SELECT nombre, codigo FROM Comerciales";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        $conn=null;
        while ($registro = $resultado->fetchObject()) {                
            $array []= $registro->nombre;
            $array []= $registro->codigo;
        }
        return  $array;
    }


    /**
     * Esta función devuelve un array con los datos del producto
     * 
     * @return array
     */

    public function getProducto(){
        $conexion = Conexion::connectDB();
        $query = "SELECT * FROM Productos";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        $conn=null;
        while ($registro = $resultado->fetchObject()) {                
            $array []= "REFERENCIA: ". $registro->referencia;
            $array []= "NOMBRE: ".$registro->nombre;
            $array []= "DESCRIPCIÓN: ".$registro->descripcion;
            $array []= "PRECIO: " . $registro->precio;
            $array []= "REGISTO: ".$registro->descuento;
        }
        return  $array;
    }

    /**
     * Esta función devuelve un array con los productos con dos unidades
     * @param string $referencia
     * @return array
     */

    public function getConsultaVentasProducto($referencia){
        $conexion = Conexion::connectDB();
        $query = "SELECT * FROM Ventas WHERE refProducto =\"".$referencia."\"";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        $conn=null;
        while ($registro = $resultado->fetchObject()) {                
            $array []= "CODIGO: ". $registro->codComercial;
            $array []= "CANTIDAD: ".$registro->cantidad;
            $array []= "FECHA: ".$registro->fecha;
        }
        return $array;
    }

}

?>