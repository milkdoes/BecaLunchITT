<?php
// Iniciar una sesion si aun no ha sido iniciada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Continuar si se dan los datos requeridos.
if (
    (isset($_REQUEST["Correo"]) && !empty($_REQUEST["Correo"]))
    && (isset($_REQUEST["Contrasena"]) && !empty($_REQUEST["Contrasena"]))
) {
    // Incluir archivo de conexion.
    include_once "Conn.php";

    // Variables para guardar los datos enviados.
    $correo = $_REQUEST["Correo"];
    $contrasena = $_REQUEST["Contrasena"];

    // Variable para guardar la contraseña actual del usuario.
    $contrasenaActual = NULL;

    // Variable para guardar el id del usuario.
    $idUsuario = NULL;

    // Consulta a la base de datos para obtener correo del alumno.
    $sql = "SELECT id_becado FROM CorreoA WHERE correo = '" . $correo . "' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $idUsuario = $row["id_becado"];
        }
    }

    // Consulta a base de dato para obtener contraseña actual del alumno.
    $sql = "SELECT contrasena FROM alumno WHERE id_becado = $idUsuario LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $contrasenaActual = $row["contrasena"];
        }
    }

    // Asignar variable de sesion si la contraseña enviada es la misma a la actual.
    if ($contrasena == $contrasenaActual) {
        $_SESSION["IdUsuario"] = $idUsuario;
    }
} else {
    $_SESSION["IdUsuario"] = NULL;
}
?>
