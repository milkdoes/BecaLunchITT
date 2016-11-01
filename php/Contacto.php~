<?php
// Declaracion de constantes.
define("DESTINO", "josemasal@gmail.com");

if (
    (isset($_POST["nombre"]) && !empty($_POST["nombre"]))
    && (isset($_POST["email"]) && !empty($_POST["email"]))
) {
    $nombre = $_POST["nombre"];
    $correoInicial = $_POST["email"];
    $destino = DESTINO;
    $asunto = "Contactar a " . $nombre . "\n";
    $mensaje = $_POST["mensaje"];
    $emailheader = "From: " . $nombre . "<" .  . ">\r\n";
    
    mail($destino, $asunto, $mensaje, $emailheader) or die("Lo sentimos, tu solicitud no ha sido enviada. <br />Intentalo de nuevo.");
    echo utf8_decode(utf8_encode("Tu consulta fue enviada correctamente!"));
} else {
    if( empty($_POST["nombre"]) || empty($_POST["nombre"]) == true ) {
        echo utf8_encode("Por favor, indica tu nombre.");
    }

    if( empty($_POST["email"]) || empty($_POST["email"]) == true ) {
        echo utf8_encode("Por favor, indica tu email.");
    }
}
?>
