

function logueoBiblioteca(){

    var usuario = document.getElementById("usuario");

    var contra = document.getElementById("contrasena");
    //invocamos Ajax
    var xmlhttp = new XMLHttpRequest();

    //configurar la solicitud
    xmlhttp.open("POST","php/Controlador/LogueoController.php");
    xmlhttp.setRequestHeader("X-Request-with","XMLHttpRequest");
//escuhar el evento de carga
    xmlhttp.addEventListener("load",function(){

        //Respuesta de lo que devuelve el servidor

        // recuperamos un objeto

        var respuesta = JSON.parse(xmlhttp.responseText);

        if(respuesta.success){
           //redirecciona a otra pagina

            window.location.href = "principal.php";

        }else {
            var messageControl = document.getElementById("msgerror");
            messageControl.innerHTML= respuesta.message;
            messageControl.setAttribute('style',"display:block")
        }

    })

    //enviar la solicitud con los datos del formulario

    var formData = new FormData();

    formData.append("usuario",usuario.value);

    formData.append("contra",contra.value);

    xmlhttp.send(formData);



}