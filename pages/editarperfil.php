<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/editarperfil.css">
	<link rel="icon" type="image/x-icon" href="../img/logosimple.JPG">
	<title>Editar perfil</title>
</head>
<body>

	<div id="container">

		<header>
		
			<div class="logo">
				<a href="feed.html"><img src="../img/logosimple.jpg" alt="logo de dreAm"></a>
			</div>

			<nav id="menuHorizontal">
				<ul>
					<li class="listaUsos">
						<a href="perfilpropio.html"><img src="../img/person.jpg" alt="icono del perfil"></a>
					</li>
					<li class="listaUsos">
						<img src="../img/power.png" alt="icono cerrar sesión">
					</li>
				</ul>
			</nav>

		</header>

		<div id="parteCentral">
			
			<div class="userBox">
				
				<div class="user_photo">
					<img src="../img/perfildetalle.jpg" alt="foto de perfil">
				</div>

				<div class="user_txt">
					<h3>lukas</h3>
				</div>

			</div>

			<div class="userOptions">

				<div class="inputs_sec"> <!-- INPUTS -->
					<input type="text" value="<?php
					$contenidoJson = file_get_contents('../json/data.json');
					$contenidoJson = json_decode($contenidoJson, true);
					$idSesion = session_id();
					$usuario;
					for($i=0; $i<count($contenidoJson); $i++)
					{
						$actual = $contenidoJson[$i]['id'];
						if(trim($actual) == trim($idSesion))
						{
							$usuario = $i;
							echo $contenidoJson[$usuario]['nombre'];
						}
					}
					
					?>">
					<input type="text" value="
					<?php
					echo $contenidoJson[$usuario]['lastName'];
					?>
					">
					<input type="email" value="
					<?php
					echo $contenidoJson[$usuario]['email'];
					?>
					">
					<input type="file" placeholder="actualiza tu foto">
					
					<button>enviar</button>
				</div>
		
			</div>

		</div>

		<div id="bio">
			
			<div class="editBio_btn">
				<img src="../img/editpencil.svg" alt="botón para editar biografía">
			</div>

			<div class="bio_txt">
				<p>Hola, Mundo. Soy Lukas, 3D Designer. ¿Cuándo unas cañas?</p>
			</div>

		</div>

		<footer>
			
		</footer>

	</div>

</body>
</html>