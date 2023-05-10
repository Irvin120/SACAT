// obtener la fecha actual
var hoy = new Date();

// generar el código HTML para el calendario del mes actual
var codigoHTML = generarCalendario(hoy.getFullYear(), hoy.getMonth());

// insertar el código HTML en el elemento con ID "calendario"
document.getElementById("calendario").innerHTML = codigoHTML;

// función para generar el código HTML de un calendario para un mes y un año específicos
function generarCalendario(anio, mes) {
  // obtener la fecha del primer día del mes
  var primerDia = new Date(anio, mes, 1);
  
  // obtener el número de días en el mes
  var numDias = new Date(anio, mes + 1, 0).getDate();
  
  // generar el código HTML para la tabla del calendario
  var codigoHTML = "<table>";
  codigoHTML += "<caption>" + obtenerNombreMes(mes) + " " + anio + "</caption>";
  codigoHTML += "<tr>";
  codigoHTML += "<th>Lun</th>";
  codigoHTML += "<th>Mar</th>";
  codigoHTML += "<th>Mié</th>";
  codigoHTML += "<th>Jue</th>";
  codigoHTML += "<th>Vie</th>";
  codigoHTML += "<th>Sáb</th>";
  codigoHTML += "<th>Dom</th>";
  
  // generar las filas y las celdas del calendario
  var diaActual = 1;
  var fila = "<tr>";
  for (var i = 1; i <= numDias; i++) {
    var fecha = new Date(anio, mes, i);
    if (i === 1) {
      for (var j = 0; j < primerDia.getDay(); j++) {
        fila += "<tr>";
      }
    }
    fila += "<td>" + i + "</td>";
    if (fecha.getDay() === 0) {
      codigoHTML += fila + "</tr>";
      fila = "<tr>";
    }
    diaActual++;
  }
  
  // completar la última fila con celdas vacías si es necesario
  if (fecha.getDay() !== 0) {
    for (var k = fecha.getDay(); k < 6; k++) {
      fila += "<td></td>";
    }
  }
  
  codigoHTML += fila + "</tr>";
  codigoHTML += "</table>";
  
  return codigoHTML;
}

// función para obtener el nombre de un mes a partir de su número (0 = enero, 1 = febrero, etc.)
function obtenerNombreMes(mes) {
  var nombresMeses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",                      "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  return nombresMeses[mes];
}
