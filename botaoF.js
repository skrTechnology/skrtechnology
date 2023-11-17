$("#button").click(function() {
    $('html, body').animate({
        scrollTo: $("#anchor").offset().top
    }, 2000);
});
   