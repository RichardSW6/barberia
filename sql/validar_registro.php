<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_nac = $_POST['fecha_nac'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave']; 
    $rol = $_POST['rol'];
  $estatus = $_POST['estatus'];


    $sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m,fecha_nac, telefono,   email,usuario, clave, rol, estatus) 
            VALUES ('$nombre', '$apellido_p', '$apellido_m','$fecha_nac',  '$telefono','$email',  '$usuario', '$clave', '$rol','$estatus')";

   if (mysqli_query($conexion, $sql)) {
        echo "<script>alert('¡Personal registrado con éxito!'); window.location='../registro.php';</script>";
    } else {
        echo "Error al registrar" . mysqli_error($conexion);
    }

}
?>