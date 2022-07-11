<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/perfilpropio.css">
	<link rel="icon" type="image/x-icon" href="../img/logosimple.jpg">
	<link href="https://fonts.googleapis.com/css2?family=Ruda:wght@900&display=swap" rel="stylesheet">
	<title>Mi perfil</title>
</head>
<body>

	<div id="container">

		<header>
		
			<div class="logo">
				<a href="feed.html"><img src="../img/logosimple.jpg" alt="logo de dreAm"></a>			
			</div>

			<nav id="menuHorizontal">
				<ul>
					<li class="listaUsos"><button class="nuevaFoto">NUEVA FOTO</button></li>
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
					<img src="
					<?php
						$contenidoJson = file_get_contents('../json/data.json');
						$contenidoJson = json_decode($contenidoJson, true);

						$email = $_GET['email'];
						for($i=0; $i<count($contenidoJson); $i++)
						{
							if($contenidoJson[$i]['email'] == $email)
							{
								$idUsuario = $contenidoJson[$i]['id'];
								echo "..//imgUsers//$idUsuario//profile//profile.png";
							}
						}	
						
					?>" alt="foto de perfil">
				</div>

				<div class="user_txt">
					<h3><?php
						//nombre del usuario

						for($i=0; $i<count($contenidoJson); $i++)
						{
							if($contenidoJson[$i]['email'] == $email)
							{
								$idUsuario = $contenidoJson[$i]['id'];
								echo $contenidoJson[$i]['nombre'] ;
							}
						}	
					?></h3>
				</div>

			</div>

			<div class="userBio">

				<div class="inputs_sec"> <!-- INPUTS -->
					<div><h3>¡Ya estoy en dreAm!</h3></div>
					<a href="editarperfil.html"><button class="modificarPerfil">MODIFICAR PERFIL</a></button>
				</div>
		
			</div>

		</div>

<!-- INTENTO-->

		<div class="perfiles">
     	
     	<div class="perfil">
			<a href="">
        	<img src="../img/dreamers (1).jpg" class="imgdreamer" >
        	<p class="txtimg">CarlosK</p>
			</a>
      </div>
      
      <div class="perfil">
		<a href="">
        	<img src="../img/dreamers (1).jpg" class="imgdreamer" >
        	<p class="txtimg">CarlosK</p>
		</a>
      </div>
      
      <div class="perfil">
		<a href="">
        	<img src="../img/dreamers (1).jpg" class="imgdreamer" >
        	<p class="txtimg">CarlosK</p>
		</a>
      </div> 
      
      <div class="perfil">
		<a href="">
        	<img src="../img/dreamers (1).jpg" class="imgdreamer" >
        	<p class="txtimg">CarlosK</p>
		</a>
      </div>
      
      <div class="perfil">
		<a href="">
        	<img src="../img/dreamers (1).jpg" class="imgdreamer" >
        	<p class="txtimg">CarlosK</p>
		</a>
      </div> 
    </div>

    <div >
		<a id="vermas" href="feed.html"><h4>Ver más perfiles ➟</h4></a>
    </div>

    

<!-- INTENTO -->

		<div class="imagenes">
          <div>
              <img src="../img/galeria (1).jpg" class="galeria" >
          </div>
          <div>
              <img src="../img/galeria (2).jpg" class="galeria">
          </div>
          <div>
              <img src="../img/gallery (4).jpg" class="galeria">
          </div>
          <div>
              <img src="../img/gallery (3).jpg" class="galeria" >
          </div>
          <div>
              <img src="../img/gallery (2).jpg" class="galeria">
          </div>
          <div>
              <img src="../img/gallery (1).jpg" class="galeria">
          </div>
		  <div>
			<img src="../img/galeria (1).jpg" class="galeria" >
		</div>
		<div>
			<img src="../img/galeria (2).jpg" class="galeria">
		</div>
		<div>
			<img src="../img/gallery (4).jpg" class="galeria">
		</div>
		<div>
			<img src="../img/gallery (3).jpg" class="galeria" >
		</div>
		<div>
			<img src="../img/gallery (2).jpg" class="galeria">
		</div>
		<div>
			<img src="../img/gallery (1).jpg" class="galeria">
		</div>
        </div>

		<footer>
			
		</footer>

	</div>

</body>
</html>