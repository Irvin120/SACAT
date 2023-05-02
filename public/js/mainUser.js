// var inputSearch = document.getElementById('inputSearch');
// var boxSearch = document.getElementById('box-search');

// inputSearch.addEventListener('input', function() {
//     if (this.value.trim().length > 0) {
//       boxSearch.style.display = 'block';
//     } else {
//       boxSearch.style.display = 'none';
//     }
//   });


function entradaAreaUser(event) {
    var idAula = $(event.currentTarget).data('id');
    console.log(idAula);

    $.ajax({
        url: '/user/aula/' + idAula,
        type: 'GET',
        dataTyPe: 'html',
        success: function (response) {
            window.location.href = '/user/aula/' + idAula;
        },

        error: function (xhr, status, error) {
            // Mostrar un mensaje de error en la página
            var errorMessage = xhr.status + ': ' + xhr.statusText;
            $('#mensajeError').text('Se ha producido un error al recuperar las actividades: ' + errorMessage);
        }


    })
}

function enviarSolicitud() {
    if (confirm('¿Estás seguro que quieres enviar la solicitud?')) {
        alert('Solicitud Enviada')
        return true;
    } else {
        return false;
    }
}
