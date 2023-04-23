function mostrarBotones() {
    var botonesDivs = document.querySelectorAll("#botones"); // Seleccionar todos los elementos con el id "botones"

    for (var i = 0; i < botonesDivs.length; i++) { // Recorrer la NodeList de elementos
        var botonesDiv = botonesDivs[i]; // Obtener cada elemento individualmente

        if (botonesDiv.style.display === "none") { // Verificar el estado actual del display
            botonesDiv.style.display = "block"; // Cambiar a display: block si está oculto
        } else {
            botonesDiv.style.display = "none"; // Ocultar si está visible
        }
    }
}


function mostrarForm() {
    var form = document.getElementById("containerForm");
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
}


function cambiarBoton(miBoton) {
    if (miBoton.classList.contains("active")) {
        miBoton.classList.remove("active");
        miBoton.style.border = "none";
        miBoton.style.transition = "background-color 0.5s ease-in-out";
    } else {
        miBoton.classList.add("active");
        miBoton.style.border = "2px solid white";
        miBoton.style.border = "2px solid white";
        miBoton.style.transition = "background-color 0.5s ease-in-out";
    }
}


function addActividad() {
    var addActividadB = document.getElementById("#containerForm")
    if (addActividadB.style.display === "none") {
        addActividadB.style.display = "block";
    } else {
        add.style.display = "none";
    }

}

function cancelarFormulario() {
    document.getElementById("formularioAdd").reset(); // Reinicia el formulario
    mostrarForm();

}

function entradaArea(event) {
    var idAula = $(event.currentTarget).data('id');
    console.log(idAula);
    $.ajax({
        url: '/mainAdmin/createActividad/' + idAula,
        type: 'GET',
        dataType: 'html',
        success: function(response) {
            window.location.href = '/mainAdmin/createActividad/' + idAula;
        },
        error: function(xhr, status, error) {
            // Mostrar un mensaje de error en la página
            var errorMessage = xhr.status + ': ' + xhr.statusText;
            $('#mensajeError').text('Se ha producido un error al recuperar las actividades: ' + errorMessage);
        }
    });
}
