$(function() {
    if($('.price', 'tr')[0]) {
        $('.price', 'tr').each(function () {
            let curIndex = $('.price', 'tr').index(this);
            let currentPrice = parseInt($(this).text().replace(/\s/g, ''));

            $('.price-change').eq(curIndex).change(function () {
                let multiplier = $(this).val();
                let newPrice;

                let maxValue = $(this).attr('max').toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
                let minValue = $(this).attr('min').toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');

                if ($(this).val() > parseInt($(this).attr('max'))) {
                    $(this).val($(this).attr('max'));
                    newPrice = (currentPrice * maxValue);
                    $('.price').eq(curIndex).text(newPrice);

                } else if ($(this).val() < $(this).attr('min')) {
                    $(this).val($(this).attr('min'));
                    newPrice = (currentPrice * minValue);
                    $('.price').eq(curIndex).text(newPrice);

                } else {
                    newPrice = (currentPrice * multiplier).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
                    $('.price').eq(curIndex).text(newPrice);
                }
            });
        });
    }

    let cartItemPrice = $('.item-price--new--digits', '.cart-item__total-price ');

    if(cartItemPrice[0]) {
        cartItemPrice.each(function () {
            let divIndex = cartItemPrice.index(this);
            let startPrice = parseInt(cartItemPrice.eq(divIndex).text().replace(/\s/g, ''));
            let tableInput = $('.table-input', '.cart-item ');

            let multiplierStart = parseInt(tableInput.eq(divIndex).val());

            let calculatedStart = multiplierStart * startPrice;

            let pricesStart = [];

            cartItemPrice.eq(divIndex).text(calculatedStart.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' '));
            for(let i = 0; i<tableInput.length; i++) {
                pricesStart[i] = parseInt(cartItemPrice.eq(i).text().replace(/\s/g, ''));
            }

            const reducer = (accumulator, currentValue) => accumulator + currentValue;

            let summStart = pricesStart.reduce(reducer);
            $('.item-price--new--digits', '.cart__lower').text(summStart.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' '));

            $('.increment').eq(divIndex).click(function() {
                let input = $(this).siblings('.table-input');
                let inputValue = input.val();
                let inputNumber = parseInt(inputValue.substr(0, inputValue.indexOf(' ')));

                inputNumber++;
                input.val(inputNumber);
                input.trigger('change');
            });

            $('.decrement').eq(divIndex).click(function() {
                let input = $(this).siblings('.table-input');
                let inputValue = input.val();
                let inputNumber = parseInt(inputValue.substr(0, inputValue.indexOf(' ')));

                inputNumber--;
                input.val(inputNumber);
                input.trigger('change');
            });

            tableInput.eq(divIndex).change(function () {
                let tableInput = $('.table-input', '.cart-item');

                let index = tableInput.index(this);

                let multiplier = parseInt(tableInput.eq(index).val());
                let tableInputMax = tableInput.eq(index).attr('max');
                let tableInputMin = tableInput.eq(index).attr('min');

                if (multiplier > tableInputMax) {

                    multiplier = tableInputMax;
                    tableInput.eq(index).val(tableInputMax);

                } else if (multiplier < tableInputMin) {

                    multiplier = tableInputMin;
                    tableInput.eq(index).val(tableInputMin);

                } else if(isNaN(multiplier)) {

                    multiplier = tableInputMin;
                    tableInput.eq(index).val(tableInputMin);
                }

                let calculated = startPrice * multiplier;

                cartItemPrice.eq(index).text(calculated.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' '));
                let prices = [];
                for (let i = 0; i < tableInput.length; i++) {
                    prices[i] = parseInt(cartItemPrice.eq(i).text().replace(/\s/g, ''));
                }

                const reducer = (accumulator, currentValue) => accumulator + currentValue;

                let summ = prices.reduce(reducer);
                $('.item-price--new--digits', ' .total-price').text(summ.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' '));
            });
        });
    }
});
