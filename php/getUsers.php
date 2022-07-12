<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo getAll();   
    }
    function getAll()
    {
        $contenidoJson = file_get_contents('../json/data.json');
        $contenidoJson = json_decode($contenidoJson, true);
        $idSesion = session_id();
        $usuario;
        for($i=0; $i<count($contenidoJson); $i++)
        {
            $actual = $contenidoJson[$i]['id'];
            if($actual == $idSesion)
            {
                $usuario = json_encode($contenidoJson[$i]);
            }
        }
        $contenidoJson  = json_encode($contenidoJson);
        $arrayUsuarios = [$contenidoJson, $usuario]; //el array que devuelve la función tiene como primer elemento todo el contenido del json y como segundo el contenido del usuario activo
        
        echo json_encode(array('message' => $arrayUsuarios)); //esto es lo que devuelve como mensaje la api
    }
   
?>