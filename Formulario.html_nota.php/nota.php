<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si las claves existen antes de usarlas
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : "No proporcionado";
    $institucion = isset($_POST['institucion']) ? htmlspecialchars($_POST['institucion']) : "No proporcionado";
    $edad = isset($_POST['edad']) ? (int)$_POST['edad'] : "No proporcionado";
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : "No especificado";
    $intereses = isset($_POST['interes']) ? implode(", ", $_POST['interes']) : "Ninguno";
    $fecha_asistencia = isset($_POST['fecha_asistencia']) ? htmlspecialchars($_POST['fecha_asistencia']) : "No proporcionado";
    $correo = isset($_POST['correo']) ? filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL) : "No proporcionado";
    $dias_asistencia = isset($_POST['dias_asistencia']) ? (int)$_POST['dias_asistencia'] : "No proporcionado";

    // Asegurar que los datos se imprimen bien
    header("Content-Type: text/plain; charset=UTF-8");
    echo "Nombre: $nombre\n";
    echo "Institución: $institucion\n";
    echo "Edad: $edad\n";
    echo "Género: $genero\n";
    echo "Área de interés: $intereses\n";
    echo "Fecha de asistencia: $fecha_asistencia\n";
    echo "Correo electrónico: $correo\n";
    echo "Días de asistencia: $dias_asistencia\n";
} else {
    echo "Acceso no autorizado";
}
?>