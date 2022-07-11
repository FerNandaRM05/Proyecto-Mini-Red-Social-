const register = async (e) => {
    e.preventDefault()
    let name = document.getElementById("name").value 
    let lastname = document.getElementById("lastName").value
    let username = document.getElementById("username").value      
    let email = document.getElementById("email").value   
    let birthday = document.getElementById("birthday").value
    let password = document.getElementById("password").value
    let passwordCheck = document.getElementById("passCheck").value      
    let data = {
        name,
        lastname,
        username,
        email,
        birthday,
        password,
        passwordCheck
    }
    console.log(data)
    const getApi = await fetch('../php/createUser.php', {
        method:'POST',
        body: JSON.stringify(data)
    })
    const resApi = await getApi.json()
    // const getApi = await fetch('../php/createUser.php',{
    //     method : 'POST',
    //     body: JSON.stringify(data)
    // })
    // const resApi = await getApi.json()
    console.log(resApi);
    
 }
