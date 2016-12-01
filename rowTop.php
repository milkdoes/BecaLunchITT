<?php
// Iniciar una sesion si aun no ha sido iniciada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Inicializar variable para el id del usuario conectado.
$idUsuario = NULL;

// Asignar id del usuario conectado si este se pide o si ya esta puesto como una variable de sesion.
//if( isset($_REQUEST["IdUsuario"]) && !empty($_REQUEST["IdUsuario"]) ) {
//    $idUsuario = $_REQUEST["IdUsuario"];
//} else
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
                    <li><a href="p_admin.html">Perfil</a></li>
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
    echo '<li>USUARIO X EN ESTADO DE LOGIN</a></li>';
} else {
    echo
        '
        CORREO<input type="text" name="CORREO" placeholder="Email" />
        CONTRASEÑA<input type="password" name="CONTRASEÑA" placeholder="Contraseña" />
        <input type="button" value="INGRESAR" id="boton" />
        '
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
