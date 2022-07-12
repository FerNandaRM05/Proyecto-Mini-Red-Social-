
async function all()
{
    const getApi = await fetch("../php/getUsers.php", 
    {
        method: 'POST'
    });

    const { message } = await getApi.json(); //message es un array que tiene todos los usuarios y los usuarios activos

    var users = JSON.parse(message[0]);
   
    var usuarioActivo = JSON.parse(message[1]);
    console.log(usuarioActivo);
    var allUsers = [users, usuarioActivo]; //se tiene que pasar en return como json
    return allUsers;
}