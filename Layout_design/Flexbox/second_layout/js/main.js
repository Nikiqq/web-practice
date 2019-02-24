$(function() {
    
    let menu = $(".site-header__menu");
    
    $(".nav-toggler").on("click", function() {
        menu.slideToggle(400);
    })
    
    $(window).resize(function(){
        let width = $(window).width();
        if(width > 576 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
})