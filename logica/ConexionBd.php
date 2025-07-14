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
}

?>