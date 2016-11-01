<?php
// Declaracion de constantes.
// Correo al cual enviar el mensaje.
define("DESTINO", "josemasal@gmail.com");
// Mensaje para indicar al usuario que se va a redireccionar a la pagina anterior.
define("SALIR", " Redireccionando... <script>setTimeout(\"location.href = '../contact.html';\", 3000);</script>");

// Si los valores estan definidos y no son vacios, continuar.
if (
    (isset($_POST["nombre"]) && !empty($_POST["nombre"]))
    && (isset($_POST["email"]) && !empty($_POST["email"]))
) {
    // Declaracion de variables para el correo a enviar.
    $nombre = $_POST["nombre"];
    $correoInicial = $_POST["email"];
    $destino = DESTINO;
    $asunto = "Contactar a " . $nombre . "\n";
    $mensaje = $_POST["mensaje"];
    $emailheader = "From: " . $nombre . "<" . $correoInicial . ">\r\n";

    // Enviar correo y desplegar mensaje si el envio fue exitoso o no.
    // De igual manera, redireccionar.
    mail($destino, $asunto, $mensaje, $emailheader)
        or die("Lo sentimos, tu mensaje no fue enviado correctamente. <br />Intentalo de nuevo." . SALIR);
    
    echo utf8_decode(utf8_encode("Muchas gracias. Nos comunicaremos contigo lo mas pronto posible." . SALIR));
} else {
    // Si el nombre y/o el email estan vacios, indicarselo al usuario.
    if( empty($_POST["nombre"]) || empty($_POST["nombre"]) == true ) {
        echo utf8_encode("Por favor, indica tu nombre.");
    }

    if( empty($_POST["email"]) || empty($_POST["email"]) == true ) {
        echo utf8_encode("Por favor, indica tu email.");
    }

    // Redireccionar.
    echo SALIR;
}
?>
