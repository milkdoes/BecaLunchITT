<?php
// Declaracion de constantes.
define("RUTA", "\"../contact.html\"");
define("TIMEOUT", "\"3000\"");

echo "Muchas gracias! Nos contactaremos contigo despues de un tiempo. Redireccionando....";
      echo "<script>setTimeout(\"location.href = '../contact.html';\", 3000);</script>";
?>
