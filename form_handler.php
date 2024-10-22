<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // Aquí puedes guardar los datos en una base de datos, enviarlos por correo, etc.
    echo "Registro exitoso: $nombre $apellido, DNI: $dni, Tipo: $tipo_usuario";
} else {
    echo "Método no permitido.";
}
?>
