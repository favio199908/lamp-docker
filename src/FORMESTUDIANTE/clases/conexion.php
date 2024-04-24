<?php
class Conexion {
    private $host = "mysql";
    private $usuario = "lamp_user";
    private $contrasena = "lamp_password";
    private $base_datos = "lamp_db";
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->base_datos);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }
}
?>
