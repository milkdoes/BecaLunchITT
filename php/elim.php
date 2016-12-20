<?php

include 'Conn.php';

$num = $_POST["no_control"];
// $nom = $_POST["Nombre"];
//$ape = $_POST["Apellido_P"];
//$apem = $_POST["Apellido_M"] ;
echo $num;
?>

<?php
$sql = "DELETE FROM alumno WHERE no_control = " . $num . ";";
//$sql1="select * from cliente";
//$result1 = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo "Alumno Eliminado<br />Redireccionando...";
} else {
    echo "Falla de eliminacion" . mysqli_error($conn);
}
?>
<!-- Funcion para regresar a la pagina anterior. -->
<script>
setTimeout(function () {
    window.location.href='/BecaLunchITT/p_alumno.html';
}, 2500);
</script>
