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


function cambiarBoton() {
    var miBoton = document.getElementById("miBoton");
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
