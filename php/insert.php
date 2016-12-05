<?php

include_once 'Conn.php';

$correo = $_POST["correo"];
$no_cont = $_POST["no_control"];
$nom = $_POST["nombre"];
$ape = $_POST["apellidop"];
$apem = $_POST["apellidom"] ;
$sem = $_POST["semestre"];
$peri = $_POST["periodo"];
$contra= $_POST["contrasena"];
//$conta = isset($_POST["contador"]);

$sql = "INSERT INTO alumno(no_control, nombre, apellidop, apellidom, semestre, periodo, contrasena) VALUES($no_cont, '$nom', '$ape', '$apem', $sem, '$peri', '$contra');";
//$sql1="select * from alumno";
$result1 = mysqli_query($conn, $sql);
//$result = mysqli_query($conn, $sql1);

$sql = "INSERT INTO CorreoA(id_becado, correo) VALUES((SELECT id_becado FROM alumno WHERE no_control = $no_cont AND contrasena = '$contra'), '$correo');";
mysqli_query($conn, $sql);

echo "Alumno Ingresado";
?>
