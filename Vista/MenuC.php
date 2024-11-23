<?php
session_start(); // Inicia la sesión para acceder a las variables de sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Si no hay una sesión activa, redirigir al login
    header("Location: ../Vista/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>Scoregestion Proyects</title>
    <link rel="shortcut icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="./css/styleindex.css" />
</head>

<body>
	<header>
		<div class="contenedor-principal">
			<div class="contenedor principal">
				<div class="soporte_tecnico">
					<i class="fa-solid fa-headset"></i>
					<div class="contenedor-soporte_tecnico">
						<span class="text">Soporte al cliente</span>
						<span class="number">320-251-1326</span>
					</div>
				</div>

                <div class="contenedor-logo">
					<i class="fa-solid fa-mug-hot"></i>
					<h1 class="logo"><a href="/">Scoregestion Proyects</a></h1>
				</div>

                <div class="contenedor-usuario">
    <i class="fa-solid fa-user" onclick="toggleMenu()"></i>
    <!-- Menú desplegable -->
    <div class="user-dropdown" id="userDropdown">
        <ul>
            <li><a href="PerfilC.php">Mi Perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="../Controlador/Salir.php">Cerrar Sesión</a></li>
        </ul>
    </div>
</div>
</div>
    </header>
    <!-- Muestra el nombre del usuario guardado en la variable de sesión -->
    <section class="bienvenida">
		<div class="contenido-bienvenida">
            <p>Gestiona tus proyectos</p>
            <h2><?php echo "Bienvenid@ " . $_SESSION['rol'] . " " . $_SESSION['nombre']; ?></h2>
            <a href="#">Crea tu proyecto</a>
        </div>
    </section>

    <main class="caracteristicas">
		<section class="contenedor contenedor-futuro">
			<div class="actualizaciones">
				<i class="fa-solid fa-plane-up"></i>
				<div class="contenido-futuro">
					<span>Panel de Control Personalizado</span>
					<p>En cada uno de tus proyectos</p>
				</div>
			</div>
			<div class="actualizaciones">
				<i class="fa-solid fa-wallet"></i>
				<div class="contenido-futuro">
					<span>Gestión de Tareas y Subtareas</span>
					<p>Tareas con prioridad y tareas secundarias</p>
				</div>
			</div>
			<div class="actualizaciones">
				<i class="fa-solid fa-gift"></i>
				<div class="contenido-futuro">
					<span>Colaboración en Tiempo Real</span>
					<p>Interactua con tus colaboradores</p>
				</div>
			</div>
			<div class="actualizaciones">
				<i class="fa-solid fa-headset"></i>
				<div class="contenido-futuro">
					<span>Interfaz Intuitiva y Fácil de Usar</span>
					<p>Diseño sencillo pero eficaz</p>
				</div>
			</div>
		</section>

        <section class="contenedor tipos">
			<h1 class="tipo1">Tipos de Proyectos</h1>
			<div class="contenedor-tipos">
				<div class="categoria categoria1">
					<p>Proyecto 1 persona</p>
					<span>Ver más</span>
				</div>
				<div class="categoria categoria2">
					<p>Proyecto 2 personas</p>
					<span>Ver más</span>
				</div>
				<div class="categoria categoria3">
					<p>Proyecto Multiple</p>
					<span>Ver más</span>
				</div>
				</div>
			</div>
		</section>


        <section class="contenedor hoy">
			<h1 class="tipo1">Últimas Actualizaciones</h1>

			<div class="contenedor-hoy">
				<div class="tajeta-hoy">
					<div class="contenedor-imagen">
						<img src="../img/blog-1.jpg" alt="Imagen Blog 1" />
						<div class="boton-hoy">
							<span>
								<i class="fa-solid fa-magnifying-glass"></i>
							</span>
							<span>
								<i class="fa-solid fa-link"></i>
							</span>
						</div>
					</div>
					<div class="contenido-hoy">
						<h3>Control de Tiempos y Plazos</h3>
						<span>06 Septiembre 2024</span>
						<p>
							Asegura que cada fase del proyecto
							se ejecute dentro de los plazos
							establecidos, mejorando la eficiencia
							y cumplimiento de entregas.
						</p>
						<div class="leer-mas">Leer más</div>
					</div>
				</div>
				<div class="tajeta-hoy">
					<div class="contenedor-imagen">
						<img src="../img/blog-2.jpg" alt="Imagen Blog 2" />
						<div class="boton-hoy">
							<span>
								<i class="fa-solid fa-magnifying-glass"></i>
							</span>
							<span>
								<i class="fa-solid fa-link"></i>
							</span>
						</div>
					</div>
					<div class="contenido-hoy">
						<h3>Visualización del Progreso</h3>
						<span>06 Septiembre 2024</span>
						<p>
							Monitorea el avance de los proyectos con representaciones
							porcentuales,ayudando a identificar rápidamente lo completado y lo que falta.
						</p>
						<div class="leer-mas">Leer más</div>
					</div>
				</div>
				<div class="tajeta-hoy">
					<div class="contenedor-imagen">
						<img src="../img/blog-3.jpg" alt="Imagen Blog 3" />
						<div class="boton-hoy">
							<span>
								<i class="fa-solid fa-magnifying-glass"></i>
							</span>
							<span>
								<i class="fa-solid fa-link"></i>
							</span>
						</div>
					</div>
					<div class="contenido-hoy">
						<h3>Gestión Integral de Proyectos</h3>
						<span>06 Septiembre 2024</span>
						<p>
							Centraliza todas las tareas,
							estados y requisitos en un solo lugar,
							facilitando la supervisión
							y organización del trabajo.
						</p>
						<div class="leer-mas">Leer más</div>
					</div>
				</div>
			</div>
		</section>
	</main>

    <footer class="pie">
		<div class="contenedor contenido-pie">
			<div class="menu-pie">
				<div class="info-contacto">
					<p class="titulos-pie">Información de Contacto</p>
					<ul>
						<li>Teléfono: 320-251-1326</li>
						<li>Email: scoregestion@support.com</li>
					</ul>
					<div class="iconos-redes">
						<span class="facebook">
							<i class="fa-brands fa-facebook-f"></i>
						</span>
						<span class="twitter">
							<i class="fa-brands fa-twitter"></i>
						</span>
						<span class="youtube">
							<i class="fa-brands fa-youtube"></i>
						</span>
						<span class="pinterest">
							<i class="fa-brands fa-pinterest-p"></i>
						</span>
						<span class="instagram">
							<i class="fa-brands fa-instagram"></i>
						</span>
					</div>
				</div>

				<div class="informacion">
					<p class="titulos-pie">Información</p>
					<ul>
						<li><a href="#">Acerca de Nosotros</a></li>
						<li><a href="#">Politicas de Privacidad</a></li>
						<li><a href="#">Términos y condiciones</a></li>
						<li><a href="#">Contactános</a></li>
					</ul>
				</div>

				<div class="mi-cuenta">
					<p class="titulos-pie">Mi cuenta</p>

					<ul>
						<li><a href="#">Mi cuenta</a></li>
						<li><a href="#">Mis proyectos</a></li>
					</ul>
				</div>

				<div class="mi-cuenta">
					<p class="titulos-pie">Acerca de Scoregestion</p>
					<ul>
						<li><a href="#">Nuestra Historia</a></li>
						<li><a href="#">Nuestra finalidad</a></li>
					</ul>
				</div>
			</div>
			<div class="copyright">
				<p>Todos los derechos reservados &copy; 2024 ScoregestionProyects, Desarrallado por ScoregestionProyects</p>
				<img src="img/payment.png" alt="Pagos">
			</div>
		</div>
	</footer>

	<script
		src="https://kit.fontawesome.com/81581fb069.js"
		crossorigin="anonymous"></script>
</body>

</html>

<script>
    function toggleMenu() {
        var dropdown = document.getElementById('userDropdown');
        dropdown.classList.toggle('show');
    }

    // Cerrar el menú si se hace clic fuera de él
    window.onclick = function(event) {
        if (!event.target.matches('.fa-user')) {
            var dropdowns = document.getElementsByClassName('user-dropdown');
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
