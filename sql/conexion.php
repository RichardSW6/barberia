<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'barberia');
define('DB_CHARSET', 'utf8mb4');

// Crear conexión
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Establecer charset
$conexion->set_charset(DB_CHARSET);

// Verificar conexión
if ($conexion->connect_error) {
    die(json_encode([
        'error' => true,
        'mensaje' => 'Error de conexión: ' . $conexion->connect_error
    ]));
} else {
    echo "Conexión exitosa";
}
?>
