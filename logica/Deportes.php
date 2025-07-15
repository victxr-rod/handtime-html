<?php

class Deportes
{
    public function obtenerNoticias()
    {
        try {
            $conn = ConexionBd::getInstance()->getConnection();
            $stmt = $conn->prepare("CALL sp_obtener_noticias()");
            $stmt->execute();
            

            
        } catch (\Throwable $th) {
            error_log("Error al obtener noticias: " . $th->getMessage());
            
        }
    }
}

