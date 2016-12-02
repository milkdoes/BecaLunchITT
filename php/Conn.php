<?php
// Ajuste de parametros para entrar a la base de datos.
$servername = "localhost";
$username = "root";
$password = "";
$BD  = "ordenes";

// Crear conexion.
$conn = mysqli_connect($servername, $username, $password, $BD);

// Verificar conexion.
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";

?>
