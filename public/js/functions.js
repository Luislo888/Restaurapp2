$(function () {

    $('#botonCrear').on('click', function () {
        location.href = '#anchorCrearComanda';
    });

    $('#botonAbiertas').on('click', function () {
        location.href = '#anchorComandasAbiertas';
    });

    $('.notificacionSucces').delay(3000).fadeOut(3000);;

    // $('#botonCrear').on('click', function () {
    //     location.href = '#anchorCrearComanda';
    // });
    // $('#botonCrear').on('click', function () {
    //     location.href = '#anchorCrearComanda';
    // });
});