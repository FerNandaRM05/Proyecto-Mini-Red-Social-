async function login(e){
    e.preventDefault()

    var email = document.getElementById("email").value;
    var contraseña = document.getElementById("password").value;
    const jsondata = await fetch("http://localhost/scripts-php/Proyecto-Mini-Red-Social-/json/data.json")
    const data = await jsondata.json()

    console.log(userexists(data, email, contraseña))

}

function userexists(data, email, password){
    for (let i = 0; i < data.length; i++) {
        if (data[i].email == email && data[i].password == password){
            return true            
        }    
    }
    return false

}