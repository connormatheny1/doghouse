        //scroll transition universal nav

$(window).scroll(function() {
    
    if( $(this).scrollTop() > 15 ) {
        
        $('#nav_container').addClass('solid');   
    } 
    else if( $(this).scrollTop() < 45 ) {
        
        $('#nav_container').removeClass('solid');
    }
});//end window.scroll function





            //.ready functions

$( document ).ready(function() {
    
    //start focus cursor on reset function
    $( "#clear" ).click(function(evt) {
        
        $( "#name_field" ).focus();
        
    });//end focus cursor function
    
    $(".hours").show();
    $(".hours_hidden").hide();
    
    $("#map").show();
    $("#map_hidden").hide();
      
    
    $(".hours>h2").click(function(){
        $(".hours_hidden").slideToggle(500);
        
    });
    
    
    $("#map>h2").click(function(){
        $("#map_hidden").slideToggle(500);
    });
    
    
});//end .ready