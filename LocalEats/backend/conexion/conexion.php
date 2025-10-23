<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nombre_de_tu_base_de_datos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Establecer el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente con PDO";
} catch(PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>