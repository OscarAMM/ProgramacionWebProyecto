var login = document.getElementById('login');
var campos = document.querySelectorAll(".campo input");

function validar(input) {
    if (input.value == "") {
        input.style.border = "1px solid red";
    } else {
        input.style.border = "1px solid black";
    }
}
function input(input) {
    if (input.value == "") {
        validar(user);
        validar(pass);
    }
}
function alertUser() {
    alert("¡Debes ingresar tu usuario y contraseña!");
}


login.addEventListener("click", function () {
    var user = document.getElementById('usuario').value;
    var pass = document.getElementById('contraseña').value;
    
    if (user == "" && pass == "") {
        alertUser();
    } else if (user == user.value && pass == "") {
        alertUser();
    } else if (user == "" && pass == pass.value) {
        alertUser();
    } else {
        input(user);
        input(pass);
    }


});
