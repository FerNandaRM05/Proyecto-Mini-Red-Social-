<?php
session_start();
$body = file_get_contents('php://input');// para conectarlo con la API
$data = json_decode($body, true);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo userValidation($data);   
}

function userValidation($infoUser){
    $name = $infoUser['name'];
    $lastname = $infoUser['lastname'];
    $username = $infoUser['username'];
    $email = $infoUser['email'];
    $fechaNac = $infoUser['birthday'];
    $password = $infoUser['password'];
    $passChek = $infoUser['passwordCheck'];
    $register = false;

    if (!$name || !$lastname || !$username || !$email || !$fechaNac || !$password || !$passChek ) {      

        return json_encode(array ( 'message' => "No puede contener espacios vacios",
                                   'status' => false));
    }
    
    if ($password !== $passChek){
        return json_encode(array ( 'message' => "Las contraseñas no coinciden"));
        $password = null;
    } 

    $jsonData = [];
    if(is_file('..\json\data.json')){
        $contenidoJson = file_get_contents('..\json\data.json');
        $contenidoJson = json_decode($contenidoJson, true);
        $jsonData = $contenidoJson;
    }
    if (isset($jsonData)){
        for ($i = 0; $i < count($jsonData); $i++) {
            if (($jsonData[$i]["username"]) == $username) {
                return json_encode(array ( 'message' => "El nombre de usuario ya existe"));
            }
    
            if (($jsonData[$i]["email"]) == $email) {
                return json_encode(array ( 'message' => "El email ya esta registrado."));
                
            }
        }
    }
        
    if(isset($password)){
        $miArray = (Object) [
            'id' => session_id(),
            'nombre' => $name,
            'lastName' => $lastname,
            'username' => $username,
            'email' => $email,
            'fechaNac' => $fechaNac,
            'password' => $password,
            'description' => '',
            'status' => true
        ];
    } else {
        return json_encode(array ( 'message' =>"No se ha podido completar el registro"));
    }
    
    if(!isset($passError) && !isset($userError) && !isset($mailError)){
        $jsonData[] = $miArray;
        $json = json_encode($jsonData);
        file_put_contents('..\json\data.json', $json);        
        return json_encode(array ('id' => session_id(),
        'nombre' => $name,
        'username' => $username,
        'email' => $email,
        'fechaNac' => $fechaNac,
        'password' => $password,
         'status' => true));
    }   
}

?>