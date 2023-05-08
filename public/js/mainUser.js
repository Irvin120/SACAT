function entradaAreaUser(event, idUsuario, correoUsuarioEncryp) {
    var idAula = $(event.currentTarget).data('id');
    $.ajax({
        url: '/user/aula/' + idAula + '/' + idUsuario + '/' + correoUsuarioEncryp,
        type: 'GET',
        dataTyPe: 'html',
        success: function (response) {
            window.location.href = '/user/aula/' + idAula + '/' + idUsuario + '/' + correoUsuarioEncryp;
        },

        error: function (xhr, status, error) {
            // Mostrar un mensaje de error en la página
            var errorMessage = xhr.status + ': ' + xhr.statusText;
            $('#mensajeError').text('Se ha producido un error al recuperar las actividades: ' + errorMessage);
        }


    })
}

function entradaHomeUser(event, idUsuario, correoUsuarioEncryp) {
    var idAula = $(event.currentTarget).data('id');
    $.ajax({
        url: '/user/mainUser/' + idUsuario + '/' + correoUsuarioEncryp,
        type: 'GET',
        dataTyPe: 'html',
        success: function (response) {
            window.location.href = '/user/mainUser/' + idUsuario + '/' + correoUsuarioEncryp;
        },

        error: function (xhr, status, error) {
            // Mostrar un mensaje de error en la página
            var errorMessage = xhr.status + ': ' + xhr.statusText;
            $('#mensajeError').text('Se ha producido un error al recuperar el home: ' + errorMessage);
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

function entradaActividadUser(event, idActividad, nombreActividad, idUsuario, correoUsuarioEncryp) {
    event.preventDefault();
    window.location.href = '/user/aula/checklisUser/' + idActividad + '/' + nombreActividad + '/' + idUsuario + '/' + correoUsuarioEncryp ;
}

function confirmLogout() {
    if (confirm('¿Estás seguro de que quieres cerrar sesión?')) {
        return true;
    } else {
        return false;
    }
}