<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Sin contraseña
$dbname = "scoregestionproyects";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos están definidos en $_POST
    if (isset($_POST['nombre'], $_POST['email'], $_POST['contraseña'], $_POST['rol'])) {
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $email = $conn->real_escape_string($_POST['email']);
        $contraseña = $conn->real_escape_string($_POST['contraseña']);
        $rol = $conn->real_escape_string($_POST['rol']);

        // Verificar que los campos no estén vacíos
        if (!empty($nombre) && !empty($email) && !empty($contraseña) && !empty($rol)) {

            // Verificar si el correo ya está registrado
            $sql = "SELECT * FROM Usuarios WHERE Email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "El correo ya está registrado.";
            } else {
                // **Hash de la contraseña**
                $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

                // Insertar el nuevo usuario en la base de datos con la contraseña hasheada
                $sql = "INSERT INTO Usuarios (Nombre, Email, Contraseña, Rol) VALUES ('$nombre', '$email', '$contraseña_hashed', '$rol')";

                if ($conn->query($sql) === TRUE) {
                    // Registro exitoso, redirigir a la página de login
                    header("Location: ../Vista/login.php");
                    exit(); // Asegura que el script se detenga después de la redirección
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }
    } else {
        echo "No se recibieron todos los datos necesarios.";
    }
}

// Cerrar conexión
$conn->close();
