$(function() {

    let headerWrapper = $('.header-wrapper');
    let bottomMenu = $('.bottom-menu');

    if(headerWrapper) {
        if ($(window).width() < 768) {
            headerWrapper.addClass('fixed');
            bottomMenu.addClass('fixed');
        } else {
            headerWrapper.removeClass('fixed');
            bottomMenu.removeClass('fixed');
        }

        window.addEventListener('resize', function () {
            if ($(window).width() < 768) {
                headerWrapper.addClass('fixed');
                bottomMenu.addClass('fixed');
            } else {
                headerWrapper.removeClass('fixed');
                bottomMenu.removeClass('fixed');
            }
        });
    }
});