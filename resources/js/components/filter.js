$(function() {
    let filterShowOption = $('.filter-option-show');

    let filterShowOptionIcon = $('.filter-option-show__icon');

    let filterOptionSlide = $('.filter-option-slide');

    if(filterShowOption[0]) {
        filterShowOption.click(function() {
            if(filterOptionSlide.eq($(this).data('filter-option-button')).hasClass('max-height')) {
                filterOptionSlide.eq($(this).data('filter-option-button')).removeClass('max-height').addClass('max-height-0');
                filterShowOptionIcon.eq($(this).data('filter-option-button')).removeClass('anim-slide').addClass('anim-slide-back');
            } else {
                filterOptionSlide.eq($(this).data('filter-option-button')).removeClass('max-height-0').addClass('max-height');
                filterShowOptionIcon.eq($(this).data('filter-option-button')).removeClass('anim-slide-back').addClass('anim-slide');
            }
        });
    }
});