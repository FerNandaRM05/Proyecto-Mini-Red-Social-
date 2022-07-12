async function login(e){
    e.preventDefault()

    var email = document.getElementById("email").value;
    var contraseña = document.getElementById("password").value;
    const jsondata = await fetch("http://localhost/scripts-php/Proyecto-Mini-Red-Social-/json/data.json")
    const data = await jsondata.json()
    var respuesta = "";
    
    const user = userexists(data, email, contraseña);
    // console.log(`Hola ${user.nombre} fer rompio el codigo`);

    if (email == "" || contraseña  == ""){      
        var respuesta = "Debe rellenar el email y contraseña"
        console.log(respuesta)
    }else if(user){
        var direccion = "../Proyecto-Mini-Red-Social-/pages/perfilpropio.php?email=" + email;
        window.location.href = direccion;
    }else{
        var errorSpan = document.getElementById("formError");
        errorSpan.innerHTML = "<p class='error'>Error en contraseña o nombre de usuario. Por favor revisa y prueba nuevamente.</p>";
    }
    
}


function userexists(data, email, contraseña){
    for (let i = 0; i < data.length; i++){
        if (data[i].email == email && data[i].password == contraseña){
            return true  
                     
        }    
    }
    return false
}
 
