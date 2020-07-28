<!DOCTYPE html>
<html lang="en">
<?php
/**
 * NOMBRE:      Jorge Felix Gonzalez 
 * FECHA:      	29/07/2020
 * FUNCION:		1 – Continuando con el ejercicio del Módulo 1. Unidad 4. Actividad 7.
 * 				6 - Agregar a la aplicación el método de autenticación de usuario.
 */
		include_once ('db_connection.php');
?>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="img/crud-logo.png" type="image/x-icon">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<title>Activida 2. Autenticación</title>

	<script>
		window.console = window.console || function(t) {};
	</script>
	<script>
		if (document.location.search.match(/type=embed/gi)) {
			window.parent.postMessage("resize", "*");
		}
	</script>
</head>

<body>
	<h2>Agregar autenticación de usuario al ejercicio del Módulo 1. Unidad 4. Actividad 7 CRUD.</h2>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="save.usuario.php" method="POST">
				<h1>Crear Una Cuenta</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></i></a>
				</div>
				<span>O use su correo electrónico para registrarse</span>
				<input type="text" name= "nombre" placeholder="Nombre" />
				<input type="email" name="correo" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<button type="submit" name ="registrar" value="registrar">Regístrate</button>
			</form>
		</div>
		
		<div class="form-container sign-in-container">
			<form action="login.php" method="POST">
				<h1>Inicia Sesión</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></i></a>
				</div>
				<span>O usa tu cuenta</span>
				<input type="email" name="usuario" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<a href="#">¿Olvidaste tu contraseña?</a>
				<button type="submit" name ="inicio_sesion" >Inicia Sesión</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>¡Bienvenido de nuevo!</h1>
					<p>Mantente conectado con nosotros, inicie sesión con su información personal</p>
					<button class="ghost" id="signIn">Inicia Sesión</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>¡Hey Amigo!</h1>
					<p>No tienes una cuanta, Regístrate y comience su viaje con nosotros.</p>
					<button class="ghost" id="signUp">Registrarse</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="py-5 bg-dark">
			<div>
			<p class="m-0 text-center text-white">Copyright &copy; <?php echo "Express App Todos los derechos reservados @ ", date('Y'); ?></p>
		</div>
	</footer>

	<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

	<script id="rendered-js">
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>
</body>

</html>