async function login(e){
    e.preventDefault()

    var email = document.getElementById("email").value;
    var contraseña = document.getElementById("password").value;
    const jsondata = await fetch("http://localhost/scripts-php/Proyecto-Mini-Red-Social-/json/data.json")
    const data = await jsondata.json()

    
    const user = userexists(data, email, contraseña);

    if(user == false){
        var errorSpan = document.getElementById("formError");
        errorSpan.innerHTML = "Error en contraseña o nombre de usuario. Por favor revisa y prueba nuevamente" 
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
 
