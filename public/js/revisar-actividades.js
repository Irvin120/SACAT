
const d = document;


/* BOTONES */
const button1 = d.getElementById("button-volver-lista"),
button2 = d.getElementById("button-revisar"),
button3 = d.getElementById("button-ver-notas"),
button4 = d.getElementById("button-volver-info");

/* CONTENEDORES DE CUATRIMESTRES */
const lista_actividades = d.getElementById("lista-actividades"),
info_actividades = d.getElementById("info-actividades"),
ver_notas = d.getElementById("ver-notas"),
volver_info = d.getElementById("volver-info");



d.addEventListener("click",(e)=>{

    if (e.target === button1) {
        if (e.target.classList.contains("activo")) return /* El btn ya tiene la clase */

        /* Estilos en el boton */
        const btnActivo= d.querySelector(".btn.activo");
        btnActivo.classList.remove("activo");
        e.target.classList.add("activo");

        /* Estilos para materias */
        const ContenedorActivo = d.querySelector(".contenedor-actividades.activo");
        ContenedorActivo.classList.remove("activo");
        lista_actividades.classList.add("activo");
    }
    
    if (e.target === button2) {
        if (e.target.classList.contains("activo")) return /* El btn ya tiene la clase */

        
        /* Estilos en el boton */
        const btnActivo= d.querySelector(".btn.activo");
        btnActivo.classList.remove("activo");
        e.target.classList.add("activo");

        /* Estilos para materias */
        const ContenedorActivo = d.querySelector(".contenedor-actividades.activo");
        ContenedorActivo.classList.remove("activo");
        info_actividades.classList.add("activo");
    }  

    if (e.target === button3) {
        if (e.target.classList.contains("activo")) return /* El btn ya tiene la clase */

        /* Estilos en el boton */
        const btnActivo= d.querySelector(".btn.activo");
        btnActivo.classList.remove("activo");
        e.target.classList.add("activo");

        /* Estilos para materias */
        const ContenedorActivo = d.querySelector(".contenedor-actividades.activo");
        ContenedorActivo.classList.remove("activo");
        ver_notas.classList.add("activo");
    }  

    if (e.target === button4) {
        if (e.target.classList.contains("activo")) return /* El btn ya tiene la clase */

        /* Estilos en el boton */
        const btnActivo= d.querySelector(".btn.activo");
        btnActivo.classList.remove("activo");
        e.target.classList.add("activo");

        /* Estilos para materias */
        const ContenedorActivo = d.querySelector(".contenedor-actividades.activo");
        ContenedorActivo.classList.remove("activo");
        info_actividades.classList.add("activo");
    }  


    
});
