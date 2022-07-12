async function login(e){
    e.preventDefault()

    var email = document.getElementById("email").value;
    var contraseña = document.getElementById("password").value;
    const jsondata = await fetch("../Proyecto-Mini-Red-Social-/json/data.json")
    const data = await jsondata.json()
    
    const user = userexists(data, email, contraseña);
    // console.log(`Hola ${user.nombre} fer rompio el codigo`);

    const { id, status } = userexists(data, email, contraseña);
    console.log(id);

    if (email == "" || contraseña  == ""){      
        var errorSpan = document.getElementById("formError");
        errorSpan.innerHTML = "<p>❌​ Debe rellenar el email y contraseña</p>";
        errorSpan.classList.add("error");
    }else if(status){
        var direccion = "../Proyecto-Mini-Red-Social-/pages/perfilpropio.php?id=" + id;
        window.location.href = direccion;
    }else{
        var errorSpan = document.getElementById("formError");
        errorSpan.innerHTML = "<p class='error'>❌ Error en contraseña o nombre de usuario. Por favor revisa y prueba nuevamente.</p>";
    }
}


function userexists(data, email, contraseña){
    for (let i = 0; i < data.length; i++){
        if (data[i].email == email && data[i].password == contraseña){
            return data[i];
        }    
    }
    return false
}
 
