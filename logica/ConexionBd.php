<?php
class ConexionBd {
    private static $instance = null;
    private $conn;

    private $host = 'localhost';
    private $db = 'sportzone';
    private $user = 'root';
    private $pass = '';

    private function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
        // Configurar charset a utf8
        $this->conn->set_charset("utf8mb4");
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ConexionBd();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

    // Método para ejecutar consultas preparadas de manera segura
    public function ejecutarConsulta($sql, $params = [], $types = '') {
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            throw new Exception("Error en la preparación: " . $this->conn->error);
        }

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            throw new Exception("Error en la ejecución: " . $stmt->error);
        }

        return $stmt;
    }
}
?>