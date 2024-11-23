<?php
session_start();

// Conexión a la base de datos
$host = "localhost";
$dbname = "scoregestionproyects";
$username = "root";
$password = "";

try {
    // Crear conexión con PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir y limpiar los datos del formulario
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $contraseña = filter_input(INPUT_POST, 'contraseña', FILTER_SANITIZE_STRING);

        // Verificar que ambos campos estén llenos
        if (!empty($email) && !empty($contraseña)) {
            // Query para buscar al usuario (insensible a mayúsculas/minúsculas)
            $query = "SELECT * FROM Usuarios WHERE LOWER(Email) = LOWER(:email) LIMIT 1";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener el resultado

            // Verificar si se encontró el usuario
            if ($usuario) {
                // Verificar si la contraseña es correcta
                if (password_verify($contraseña, $usuario['Contraseña'])) {
                    // Contraseña es correcta, iniciar sesión
                    $_SESSION['usuario_id'] = $usuario['UsuarioID'];
                    $_SESSION['nombre'] = $usuario['Nombre'];
                    $_SESSION['rol'] = $usuario['Rol'];

                    // Redireccionar a la página MenuC.php
                    header("Location: ../Vista/MenuC.php");
                    exit();
                } else {
                    // Contraseña incorrecta
                    $error = "Contraseña incorrecta.";
                }
            } else {
                // Usuario no encontrado
                $error = "Email no registrado.";
            }
        } else {
            // Si algún campo está vacío
            $error = "Todos los campos son obligatorios.";
        }
    }
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/stylesusuario.css">
</head>

<body>
    <section class="form-usuario">
        <div class="form-usuarios">
            <div class="well well-sm text-center">
                <h1>INICIAR SESIÓN</h1>
            </div>

            <!-- Mostrar el error si existe -->
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="buttons">
                <a href="../Vista/Login.php">Volver al login</a>
            </div>
        </div>
    </section>
</body>

</html>