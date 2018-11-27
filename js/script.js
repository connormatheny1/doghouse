

//scroll transition universal nav
$(window).scroll(function() {
    if($(this).scrollTop() > 15) { 
        $('#nav_container').addClass('solid');
    } 
    else if($(this).scrollTop() < 45) {
        $('#nav_container').removeClass('solid');
    }
});