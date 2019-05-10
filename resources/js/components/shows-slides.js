import $ from "jquery";

if ( window.location.hash ) scroll(0,0);
setTimeout( function() { scroll(0,0); }, 1);

$(function() {
    let dropdownTarget = $('.js-dropdown-target');
    let dropdownButton = $('.js-dropdown');

    if(dropdownTarget[0]) {
        if ($('body').hasClass('item-page')) {
            dropdownButton.on('click', function () {
                if (dropdownTarget.hasClass('flex')) {
                    dropdownTarget.removeClass('flex');
                } else dropdownTarget.addClass('flex');
            });
        } else {
            if ($(window).width() < 1024) {
                dropdownButton.on('click', function () {
                    if (dropdownTarget.hasClass('flex')) {
                        dropdownTarget.removeClass('flex');
                    } else dropdownTarget.addClass('flex');
                });
            }
        }
    }

    $('.path-link', '.cart__wrapper').click(function() {
        $.magnificPopup.close();
    });

    let scrollToAnchorButton = $('.anchor-scroll');

    if(scrollToAnchorButton[0]) {
        scrollToAnchorButton.click(function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top + 'px'
            }, 1000, 'swing');

        });
    }

    let itemTabButton = $('.item-tabs__button');

    if(window.location.hash) {
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 1000, 'swing');
        if(itemTabButton.data('wstabs-button')) {
        }
        for(let i = 0; i<itemTabButton.length; i++) {
            itemTabButton.eq(i).removeClass('is-active');
            $('.my-block').eq(i).removeClass('is-active');
            if(i===2) {
                itemTabButton.eq(i).addClass('is-active');
                $('.my-block').eq(i).addClass('is-active');
            }
        }
    }


    if( $('.item__reviews-review.anchor-scroll')[0]){
        $('.item__reviews-review.anchor-scroll').click(function() {
            $('.my-button').data({
                "ws-block": "3",
                "ws-group": "group-h"
            }).addClass('is-active')
        });
    }

    let slideDownButton = $('.slide-down');

    if(slideDownButton[0]) {
        slideDownButton.click(function() {
           let target = $('.slide-target').eq($(this).data('slide-button') -1);
           if(target.css('max-height') === '1500px') {
               target.removeAttr('style');
               $(this).text('Показать все')
           } else {
               target.css('max-height', '1500px');
               $(this).text('Скрыть часть');
           }
        });
    }

    let showFilterButton = $('.filter-show');

    if(showFilterButton[0]) {
        showFilterButton.click(function () {
            let filter = $('.filter__wrapper');
            let buttonText = $('.filter-show .filter-show-text');

            $('.arrow-spin').toggleClass('rotate');
            if (filter.css('max-height') === '1500px') {
                filter.attr('style', '');
                $(buttonText).text('Показать фильтр');

                showFilterButton.removeClass('is-active');
            } else {
                filter.css('max-height', '1500px');
                $(buttonText).text('Скрыть фильтр');

                showFilterButton.addClass('is-active');
            }
        });
    }
});