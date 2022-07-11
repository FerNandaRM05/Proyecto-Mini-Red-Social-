<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/feed.css">
    <link rel="icon" type="image/x-icon" href="../img/logosimple.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Feed</title>

</head>
<body>
  
  <div id="container"> 
      <header>
      
        <div class="logo">
          <img src="../img/logosimple.JPG" alt="logo de dreAm">
        </div>
        <nav id="menuHorizontal">
          <ul>
            <li class="listaUsos">
              <img src="../img/person.JPG" alt="icono del perfil">
            </li>
            <li class="listaUsos">
              <img src="../img/power.png" onclick='cerrarSesion()' alt="icono cerrar sesión">
            </li>
          </ul>
        </nav>
      </header>
    


      <main>

        <h1>Encuentra a más dreAmers</h1>
        
        <!---->

        <?php
        $data = [];
        if(is_file('data.json'))
        {
            $contenidoJson = file_get_contents('data.json');
            $contenidoJson = json_decode($contenidoJson, true);
            $data = $contenidoJson;
        }

        echo "<div class='imagenes'>";
        for($i=0; $i<count($data); $i++)
        {
          if($data[$i]['id'] == session_id())
          {
            $email = $data[$i]['email'];
          }
        }
        for($i=0; $i<count($data); $i++)
        {
            if($data[$i]['email'] != $email) //para que no muestre al usuario activo en la lista de los otros usuarios
            {
                $idUsuario = $data[$i]['id'];
                if(is_dir("./imgUsers/$idUsuario/profile"))
                {
                    $ruta = "../imgUsers/$idUsuario/profile/profile.png"; //ruta en la que estará la img de perfil del usuario $i
                }
    
                echo "<div class='usuario'><img src='$ruta' class='imgusuario'>"; //se imprime la foto de perfil
                echo "<button class='txtimg'>$data[$i]['nombre']</button>"; //se imprime el nombre del usuario
                echo "</div>";
            }
        }
        echo "</ul>";
        ?>
        <div class="imagenes">
          <div class="usuario">
              <img src="../img/galeria (1).jpg" class="imgusuario" >
              <button class="txtimg">CarlosK</button>
          </div>
          <div class="usuario" >
              <img src="../img/galeria (1).jpg" class="imgusuario">
              <button class="txtimg">MariaS</button>
          </div>
          <div class="usuario">
              <img src="../img/galeria (1).jpg" class="imgusuario">
              <button class="txtimg">LorenaR</button>
          </div>
        
        </div>

      </main>

      <footer>
         
      </footer>
  </div>



</body>
</html>