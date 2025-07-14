<?php
session_start();
require_once 'ConexionBd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correoOusuario = $_POST['usuario_correo']; 
    $contrasena = $_POST['contrasena'];

    if (empty($correoOusuario) || empty($contrasena)) {
        die("Por favor, completa todos los campos.");
    }

    $conexion = ConexionBd::getInstance()->getConnection();

    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE (correo_usuario = ? OR username = ?) AND contrasena_usuario = ?");
    $stmt->bind_param("sss", $correoOusuario, $correoOusuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre_usuario'];
        $_SESSION['apellido'] = $usuario['apellido_usuario'];
        $_SESSION['username'] = $usuario['username'];

        header("Location: ../index.php");
        exit();
    } else {
        echo "Correo, usuario o contraseña incorrectos.";
    }

    $stmt->close();
    $conexion->close();
}
?>
