$(function() {
    $('.cart__delete').click(function() {
        $(this).parent().find('.cart-item__delete-item').addClass('flex');
    });

    $('.are-you-sure--no').click(function() {
        $(this).closest('.cart-item__delete-item').removeClass('flex');
    });

    function checkForExistence($element) {
        if($element.length === 0) {
            $('.total-price').find('.item-price--new--digits').text('0');
            $('.cart__lower').find('.item-buy-button').attr('disabled', 'disabled');
        } else {
            $('.cart__lower').find('.item-buy-button').removeAttr('disabled');
        }
    }

    $('.are-you-sure--yes').click(function() {
        let $this = $(this);
        let cartItem = $this.closest('.cart-item');

        $this.closest('.cart-item__delete-item').removeClass('flex');
        cartItem.addClass('delete-cart-animation');

        setTimeout(function() {
            cartItem.remove();
            $('.table-input').trigger('change');
            checkForExistence($('.cart-item'));
        }, 750);
    });

    $('.cart-open').click(function() {
        checkForExistence($('.cart-item'));
    });
});