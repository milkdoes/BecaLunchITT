<?php
// Iniciar una sesion si aun no ha sido iniciada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incluir archivo de conexion.
include_once "php/Conn.php";

// Inicializar variable para el id del usuario conectado.
$idUsuario = NULL;

if( isset($_SESSION["IdUsuario"]) && !empty($_SESSION["IdUsuario"]) ) {
    $idUsuario = $_SESSION["IdUsuario"];
}
?>

<div class="row-top">
    <div class="main">
        <div class="wrapper">
            <h1><a href="index.html">Beca-lunch<span> ITT</span></a></h1>
            <nav>
                <ul class="menu">
                    <li><a href="index.html">Acerca de</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <!--
                        <li><a href="p_admin.html">Perfil</a></li>
                    -->
                    <li><a href="p_alumno.html">Alumnos</a></li>
                    <li><a href="catalogue.html">Catalogo </a></li>
                    <li><a href="faq.html">Preguntas frecuentes </a></li>
                    <li><a href="contact.html">Contactanos</a></li>
                </ul>
                <ul class="menu">
                    <li><a class="active">
<?php
// Renderizar de acuerdo a si ya hay sesion activa o no.
if ($idUsuario != NULL) {
    // Preparar consulta a base de datos.
    $sql = "SELECT a.nombre, a.no_control, c.correo FROM alumno AS a INNER JOIN CorreoA AS c ON a.id_becado = c.id_becado WHERE a.id_becado = $idUsuario LIMIT 1;";
    $result = mysqli_query($conn, $sql);

    // Variables para guardar los datos.
    $nombre = "";
    $numControl = 0;
    $correo = "";

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nombre = $row["nombre"];
            $numControl = $row["no_control"];
            $correo = $row["correo"];
        }
    }

    echo "USUARIO $nombre ($numControl) EN ESTADO DE LOGIN
        CORREO: $correo
        <input id=\"boton\" type=\"button\" value=\"SALIR\" />"
        ;
} else {
    echo
        'CORREO<input id="correo" type="text" name="CORREO" placeholder="Email" />
        CONTRASEÑA<input id="contrasena" type="password" name="CONTRASEÑA" placeholder="Contraseña" />
        <input id="boton" type="button" value="INGRESAR" />'
        ;
}
?>
                        </a></li>
                        <!-- <li><a href="index.html">Salir</a></li> -->
                </ul>
            </nav>
        </div>
    </div>
</div>
