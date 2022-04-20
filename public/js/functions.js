$(function () {


    $('.fa-circle-plus').on('click', function () {

        $(this).removeClass('fa-circle-plus');
        $(this).css('margin-top', '-2px');
        $(this).css('margin-left', '-2px');
        $(this).addClass('fa-circle-plus30');

        $boton = $(this);

        const myInterval = setInterval(myTimer, 200);

        function myTimer() {
            $boton.css('margin-top', '0px');
            $boton.css('margin-left', '0px');
            $boton.removeClass('fa-circle-plus30').addClass('fa-circle-plus');
            clearInterval(myInterval);
        }
    });

    $('.fa-circle-minus').on('click', function () {

        $(this).removeClass('fa-circle-minus');
        $(this).css('margin-top', '-2px');
        $(this).css('margin-left', '-2px');
        $(this).addClass('fa-circle-minus30');

        $boton = $(this);

        const myInterval = setInterval(myTimer, 200);

        function myTimer() {
            $boton.css('margin-top', '0px');
            $boton.css('margin-left', '0px');
            $boton.removeClass('fa-circle-minus30').addClass('fa-circle-minus');
            clearInterval(myInterval);
        }
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