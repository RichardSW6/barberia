<?php
include 'conexion.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $pass = $_POST['clave'];

    $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$pass'");

   if ($datos = $sql->fetch_object()) {
        header("location: index.php");
        exit();
    } else {
        $error_login = "Usuario o contraseña incorrectos";
    }
}
?>