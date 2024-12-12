(function ($) {
$(document).ready(function () {
    $("#respMenu").aceResponsiveMenu({
        resizeWidth: '768', // Set the same in Media query
        animationSpeed: 'fast', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });
    $('main-menu li ul').addClass('sub-menu');
    $("p").css("background-color", "yellow");
});
})(jQuery)