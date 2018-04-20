var cancel = document.getElementById('cancel');
var accept = document.getElementById('accept');
var empty = "";
accept.addEventListener("click", function () {
    var password = document.getElementById('newPassword').value;
    var confirm = document.getElementById('confirmNP').value;

    if (password == empty && confirm == empty) {
        alert("¡Debes completar los campos!");
    } else if (password != confirm) {
        alert("¡Las contraseñas no coinciden!");
    }
});

cancel.addEventListener("click", function () {
    window.location.href = "Login.html";
});
