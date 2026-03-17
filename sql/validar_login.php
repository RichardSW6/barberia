<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['usuario'] ?? '');
    $pass = trim($_POST['clave']   ?? '');

    if ($user === '' || $pass === '') {
        header('Location: ../login.php?error=campos');
        exit();
    }

    $stmt = $conexion->prepare("SELECT id_usuario, id_empleado, username, password_hash, rol FROM usuarios WHERE username = ? AND activo = 1");
    $stmt->bind_param('s', $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($pass, $row['password_hash'])) {
            $_SESSION['id_usuario']  = $row['id_usuario'];
            header('Location: ../index.php');
            exit();
        }
    }

    // Credenciales incorrectas
    header('Location: ../login.php?error=credenciales');
    exit();
}
?>