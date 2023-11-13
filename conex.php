<?php
// Datos de conexión a la base de datos
$servername = "localhost";  // Cambia esto a la dirección de tu servidor MySQL si es necesario
$username = "root";
$password = "";
$database = "login_crud";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si la conexión se estableció correctamente
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// ... Aquí puedes realizar operaciones en la base de datos ...

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
