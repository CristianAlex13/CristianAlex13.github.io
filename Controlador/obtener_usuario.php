<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir a la página de inicio de sesión si no está autenticado
    header('Location: Login.php');
    exit();
}

// Obtener el ID del usuario de la sesión
$user_id = $_SESSION['usuario_id'];

// Conectar a la base de datos
$host = 'localhost'; // Cambia según tu configuración
$db = 'scoregestionproyects';
$user = 'root';
$password = '';
$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar los datos del usuario
$sql = "SELECT FechaRegistro, Rol, Nombre, Email, Contraseña FROM usuarios WHERE UsuarioID = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Manejo del error si no se encuentra el usuario
    echo "No se encontró el usuario.";
}

$stmt->close();
$conn->close();
?>
