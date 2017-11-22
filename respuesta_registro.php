<?php 
 // Título de la página, keywords y descripción
 $title = 'Usuario registrado';
 $keywords = 'pictures, images, imagen, imágenes, fotos, foto, detalle, detalles';
 $description = 'Página de usuario registrado de la galería on-line.';
 
 // Declaración de DOCTYPE, <html>, <head>, <title>, <meta> y <link>. 
require_once("includes/cabecera.php");
 if (isset($_POST['registro'])){
	 //Comprobar desde la BD si existe el usuario.
	 
	 $nombre = addslashes($_POST['nombre']);
 }
 ?>
 
 <body>
	<!-- HEADER -->
	<?php require_once("includes/header.php");
		
		//Comparar contraseña con repetir contraseña
		if (strcmp ($_POST['repassword'],$_POST['password2']) !== 0) {
			$_SESSION['error'] = "Las contraseñas no coinciden.";
			header("Location:registro.php");
		}
	?>
	
	<section id="datos_usuario">
		<h2>Datos personales</h2>
		<img src="img/<?php if (empty($_POST['fotoPerfil']))
				echo 'foto.jpg';
			else
				echo $_POST['fotoPerfil'];
		?>" alt="Foto perfil" width="200" height="150"/>
		
		<p>Nombre: <?php echo $_POST['nombre']; ?></p>
		<p>Email: <?php echo $_POST['correo']; ?></p>
		<p>Sexo: <?php echo $_POST['sexo']; ?></p>
		<p>Fecha: <?php echo $_POST['fecha_nac']; ?></p>
		<p>Ciudad: <?php echo $_POST['ciudad']; ?></p>
		<p>País: <?php echo $_POST['paises']; ?></p>
	</section>
	
	<!-- FOOTER con </body> y </html> -->
	<?php require_once("includes/footer.php"); ?>