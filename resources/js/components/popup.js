$(function() {
    let popupInput = $('.popup__input');
    let openClass = $('.open');

    if (openClass[0]) {
        openClass.magnificPopup({
            type: 'inline',
            closeBtnInside: true,
            fixedContentPos: true,
            removalDelay: 500,
            overflowY: "scroll",
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = this.st.el.attr('data-effect');
                },
                close: function () {
                    popupInput.removeClass('error');
                    popupInput.val('');
                    $('.error').css({
                        'display': 'none'
                    });
                }
            }
        });
    }
});
