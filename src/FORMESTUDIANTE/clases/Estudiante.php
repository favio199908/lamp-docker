<?php
require_once "conexion.php";

class Estudiante {
    private $nombre;
    private $edad;
    private $curso;
    private $conexion;

    public function __construct($nombre, $edad, $curso) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
        $this->conexion = new Conexion();
    }

    public function registrarEstudiante() {
        $sql = "INSERT INTO estudiantes (nombre, edad, curso) VALUES ('{$this->nombre}', {$this->edad}, '{$this->curso}')";
        if ($this->conexion->conexion->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
        $this->conexion->cerrarConexion();
    }
}
?>
