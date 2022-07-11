const modificar = document.getElementById("#modificar");

let name = document.getElementById("name").value 
let lastname = document.getElementById("lastName").value
let username = document.getElementById("username").value      
let email = document.getElementById("email").value   
let birthday = document.getElementById("birthday").value
let password = document.getElementById("password").value
let passwordCheck = document.getElementById("passCheck").value   

const rutaJson = require("./json/data.json");
let transform = parse(rutaJson);

function modificarButton(){
    if(has(transform, "name")){
        transform["name"] = name;

    } else if(has(transform, "lastname")){
        transform["lastname"] = lastname;

    } else if (has(transform, "username")){
        transform["username"] = username;

    } else if(has(transform, "email")){
        transform["email"] = email;

    } else if(has(transform, "birthday")){
        transform["birthday"] = birthday;

    } else if(has(transform, "password")){
        transform["password"] = password;

    } else{
        print("No existe ningun archivo que modificar.");
}
}

modificar.addEventListener("click", modificarButton());