$(document).ready(function() {
    // Cargar la navegacion superior al cargar la pagina.
    $.ajax({
        type: "GET",
        url: "rowTop.php",
        success: function(data) {
            $("#rowTop").html(data);

            // Preparar evento para click del boton de ingreso/salida del usuario.
            $("#boton").click(function(e) {
                // Obtener valor del boton.
                let titulo = $(this).val();

                // Probar titulo del boton y reaccionar de acuerdo a su valor.
                if (titulo == "INGRESAR") {
                    let correo = $("#correo").val();
                    let contrasena = $("#contrasena").val();

                    // Llamada ajax para poner la variable de sesion.
                    $.ajax({
                        type: "POST",
                        url: "php/SetSessionIdUsuario.php",
                        data: {
                            Correo: correo
                            , Contrasena: contrasena
                        }, success: function(data) {
                            window.location.reload();
                        }
                    });
                } else if (titulo == "SALIR") {
                    // Llamada ajax para limpiar la variable de sesion.
                    $.ajax({
                        type: "POST",
                        url: "php/SetSessionIdUsuario.php",
                        data: {
                            Correo: ""
                            , Contrasena: ""
                        }, success: function(data) {
                            window.location.reload();
                        }
                    });
                }
            });
        }
    });
});
