<?php
require_once 'ConexionBd.php';

class ProductoController {
    private $db;

    public function __construct() {
        $this->db = ConexionBd::getInstance()->getConnection();
    }

    public function obtenerProductos($categoria_id = null) {
        try {
            $conn = ConexionBd::getInstance()->getConnection();
          
            $stmt = $conn->prepare("CALL sp_obtener_productos(?)");
            $stmt->bind_param("i", $categoria_id);
            $stmt->execute();
            
            $result = $stmt->get_result();
            $productos = $result->fetch_all(MYSQLI_ASSOC);
            
            $stmt->close();
            
            return $productos;
        } catch (Exception $e) {
            error_log("Error al obtener productos: " . $e->getMessage());
            return [];
        }
    }

    public function obtenerCategorias() {
        try {
            $conn = ConexionBd::getInstance()->getConnection();
            $result = $conn->query("SELECT * FROM categoria");
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            error_log("Error al obtener categorías: " . $e->getMessage());
            return [];
        }
    }
}
?>