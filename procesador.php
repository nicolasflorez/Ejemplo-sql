<?php


//$con->close();
$host="localhost";
$user="root";
$password="mysql2018";
$database="ud";
$port="3306";
$conexion=mysqli_connect($host, $user, $password, $database, $port);

$cadena="select nombre, clave from usuario";
$resultado=mysqli_query( $conexion,$cadena);

if (mysqli_num_rows($resultado)>0){
    $registro = mysqli_fetch_assoc($resultado);
        
        if ($_REQUEST["usuario"]== $registro["nombre"] && $_REQUEST["pass"] == $registro["clave"] ){
        echo "usted ha ingresado a la tierra ";
        }else{
        echo "se fue por un agujero negro ";
     
    }
}