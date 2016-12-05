<?php

include_once 'Conn.php';

  $num = $_POST["no_control"];
 // $nom = $_POST["Nombre"];
  //$ape = $_POST["Apellido_P"];
  //$apem = $_POST["Apellido_M"] ;
?>

</tr>
<?php
    $sql = "DELETE FROM alumno  where no_control = '$num';" ;
	//$sql1="select * from cliente";
	//$result1 = mysqli_query($conn, $sql);
	$result = mysqli_query($conn, $sql);
	echo "Alumno Eliminado";
?>
