<!DOCTYPE html>
<html lang="es">

<head>
    <title>GESTIÓN USUARIOS</title>
    <link rel="stylesheet" href="css/stylespreregister.css">
    <link rel="shortcut icon" href="assets/img/icon.png">
</head>

<body>
    <section class="form-usuario">
        <form id="frm-usuario" action="../Controlador/RegisterUsuario.php" method="post" enctype="multipart/form-data">
            <!-- Título del formulario -->
            <div class="form-usuarios">
                <div class="well well-sm text-center">
                    <h1>REGISTRARSE</h1>
                </div>
                <!-- Campo para el nombre -->
                <div class="controls">
                    <h2>NOMBRE</h2>
                    <input type="text" name="nombre" class="controls" placeholder="Ingrese el nombre del usuario" required />
                </div>
                <!-- Campo para el email -->
                <div class="controls">
                    <h2>EMAIL</h2>
                    <input type="email" name="email" class="controls" placeholder="Ingrese su email" required />
                </div>
                <!-- Campo para la contraseña -->
                <div class="controls">
                    <h2>CONTRASEÑA</h2>
                    <input type="password" name="contraseña" class="controls" placeholder="Ingrese una contraseña" required />
                </div>
                <!-- Selector de rol -->
                <div class="controls">
                    <h2>ROL</h2>
                    <select id="rol" name="rol" class="controls" required>
                        <option value="" disabled selected>Seleccione su rol</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Desarrollador">Desarrollador</option>
                        <option value="Gerente de Proyecto">Gerente de Proyecto</option>
                    </select>
                </div>
                <!-- Botón de envío -->
                <div class="buttons">
                    <button class="buttons" type="submit">GUARDAR</button>

                </div>
            </div>
        </form>
    <div class="text-center">
            <p>¿Ya tienes cuenta? <a href="Login.php">Inicia sesión</a></p>
        </div>
    </section>
</body>

</html>