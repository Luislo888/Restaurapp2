$(function () {

    // El hijo de sinFocus
    $('.sinFocus').on('click', function () {
        $('.sinFocus').css("fontSize", '30px');
    });

    $('.notificacionSucces').delay(3000).fadeOut(3000);

    $('#botonCrear').on('click', function () {
        location.href = '#anchorCrearComanda';
    });

    $('#botonAbiertas').on('click', function () {
        location.href = '#anchorComandasAbiertas';
    });

    $('#botonCurso').on('click', function () {
        location.href = '#anchorComandasEnCurso';
    });

    $('#botonCerradas').on('click', function () {
        location.href = '#anchorComandasCerradas';
    });
});