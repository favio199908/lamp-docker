<?php
require_once "../clases/conexion.php";

// Conectar a la base de datos
$conexion = new Conexion();

// Obtener todos los estudiantes agregados
$sql_select = "SELECT * FROM estudiantes";
$result = $conexion->conexion->query($sql_select);

if ($result->num_rows > 0) {
    echo "<h2>Listado de Estudiantes:</h2>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>{$row["nombre"]} - Edad: {$row["edad"]}, Curso: {$row["curso"]}</li>";
    }
    echo "</ul>";
} else {
    echo "No hay estudiantes registrados";
}

// Cerrar la conexión
$conexion->cerrarConexion();
?>
