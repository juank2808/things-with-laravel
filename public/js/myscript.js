$(document).ready(function(){
    $('.parallax').parallax();
    $('#textarea1').val('');
    $('#textarea1').trigger('autoresize');
    $(".button-collapse").sideNav();
    $('.slider').slider();
    $('.collapsible').collapsible();
    $(document).on("scroll", function(){
            var desplazamientoActual = $(document).scrollTop();
            var controlArriba = $("#up");
            if(desplazamientoActual > 100 && controlArriba.css("display") == "none"){
                controlArriba.fadeIn(500);
            }
            if(desplazamientoActual < 100 && controlArriba.css("display") == "block"){
                controlArriba.fadeOut(500);
            }
        });
    $("#up").on("click", function(e){
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 1000); 
        });
});