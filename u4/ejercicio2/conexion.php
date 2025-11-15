<?php 

$host= "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "formulario_carreras2";

// 1) Crear la conexión
$conectar = mysqli_connect($host, $usuario, $contrasena, $basedatos);

// 2) Verificar la conexión
if (!$conectar) {
    echo "No se pudo conectar con el servidor";
} //else {
   // echo "si jala";
//}
?>
