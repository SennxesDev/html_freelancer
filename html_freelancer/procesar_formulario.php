<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telephone"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Guardar los datos en un archivo de texto (opcional)
    file_put_contents("contactos.txt", "$nombre | $telefono | $email | $mensaje\n", FILE_APPEND);

    // Redirigir a una página de confirmación
    header("Location: confirm.html");
    exit();
    
} else {
    echo "Error: Acceso no permitido.";
}
?>
