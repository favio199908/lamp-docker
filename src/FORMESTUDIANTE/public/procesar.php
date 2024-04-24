<?php
require_once "../clases/Estudiante.php";

// Verificar si se han enviado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $curso = $_POST["curso"];
    
    // Crear instancia de Estudiante
    $estudiante = new Estudiante($nombre, $edad, $curso);
    
    // Registrar estudiante
    if ($estudiante->registrarEstudiante()) {
        // Estudiante registrado correctamente
        echo "<script>alert('Estudiante registrado correctamente');</script>";
    } else {
        echo "<script>alert('Error al registrar el estudiante');</script>";
    }
    
    // Redireccionar a index.php
    echo "<script>window.location.href = '../templates/index.php';</script>";
}
?>
