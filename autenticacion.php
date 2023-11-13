<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "login_crud";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Aquí debes realizar una consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso, guardar información del usuario en una variable de sesión
        $_SESSION["usuario"] = $usuario;

        // Redirigir al usuario a la página de inicio (home.php)
        header("Location: home.php");
        exit(); // Es importante salir del script después de redirigir
    } else {
        // Credenciales incorrectas, mostrar un mensaje de error
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}

$conn->close();
?>