//-----------------jQuery

$(function(){
    let modalOpenButton = $('.main__button'),
        modal = $('.modal'),
        overlay = $('.modal__overlay'),
        modalCloseButton = $('.modal__close-icon');
    
    modalOpenButton.on('click', function() {
        $('.main').css('filter', 'blur(5px)');
        $('.modal').fadeIn();
    })
    
    modalCloseButton.on('click', function() {
        $('.modal').fadeOut();
        $('.main').css('filter', 'none');
    })
    
    modal.on('click', function(e) {
        if (e.target === overlay[0]) {
            $('.modal').fadeOut();
            $('.main').css('filter', 'none');
        }
    })
    
})