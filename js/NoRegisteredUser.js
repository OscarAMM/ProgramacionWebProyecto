var register = document.getElementById('register');
var exit = document.getElementById('exit');

register.addEventListener("click", function(){
    window.location.href = "registro.html";
});

exit.addEventListener("click",function(){
    window.location.href ="login.html";
});