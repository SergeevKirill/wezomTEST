import Inputmask from 'inputmask';

$(function() {
    let phoneMask = $('.js-phone-mask');
    let subscribeForm = $('.form-flex');
    let commentStar = $('.comment-star');
    let formsSelect = $('.forms__select');
    let rangeSlider = $('.js-range-slider');
    let filterPrice = $('.filter-price__input');
    let cartInput = $('.cart-item .table-input');

    function StringToNumber($stringValue) {
        let result;

        result = parseInt($stringValue.replace(/\s/g, '').replace(/[a-zA-Zа-яА-Я]/g, '').replace(/^[0]*/, ''));
        return result;
    }

    function separateZero(value) {
        let result = value.replace(/\s/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
        return result;
    }

    function checkAndUpdateRange($minElement, $maxElement, $range, stringTransform, isFirst) {
        let minRange = $minElement.val();
        let minValue = $minElement.attr('min');
        let maxRange = $maxElement.val();
        let maxValue = $maxElement.attr('max');

        if(stringTransform === true) {
            minRange = StringToNumber(minRange);
            maxRange = StringToNumber(maxRange);

            console.log(minRange, maxRange);

            if(minRange < parseInt(minValue)) {
                $minElement.val(minValue);
            }

            else if(isFirst === true) {
                if (minRange > maxRange) {
                    $minElement.val(separateZero($maxElement.val()));
                }
            }

            else if (maxRange < minRange) {
                $maxElement.val(separateZero($minElement.val()));
            }

            else if (maxRange > parseInt(maxValue)) {
                $maxElement.val(maxValue)
            }

            $range.update({
                from: minRange,
                to: maxRange
            });
        }
    }

    if(rangeSlider[0]) {
        rangeSlider.ionRangeSlider({
            type: 'double',
            onChange: function () {
                let splitTarget = rangeSlider.val();
                let splitData = splitTarget.split(/;/, 2);
                for (let i = 0; i < 2; i++) {
                    filterPrice.eq(i).val(parseInt(splitData[i]));
                    filterPrice.eq(i).val(filterPrice.eq(i).val().replace(/\B(?=(\d{3})+(?!\d))/g, ' '));
                }
            }
        });

        let myRange = rangeSlider.data('ionRangeSlider');
        let minInput = filterPrice.eq(0);
        let maxInput = filterPrice.eq(1);

        minInput.on('input', function() {
            minInput.val(separateZero(minInput.val()));
        });

        maxInput.on('input', function() {
            maxInput.val(separateZero(maxInput.val()));
        });

        minInput.change(function() {
            checkAndUpdateRange($(this), maxInput, myRange, true, true);
        });

        maxInput.change(function() {
            checkAndUpdateRange(minInput, $(this), myRange, true, false);
        });

        $('.js-filter-reset').click(function () {
            $('.creator-checkbox').prop('checked', false);
            $('.filter-price__input').val('');
            $('input:checkbox').prop('checked', false);
            myRange.reset();
        });

    }

    if ($('.js-form-validate')[0]) {
        $('.js-form-validate').each(function () {
            $(this).validate({
                showErrors: function (errorMap, errorList) {
                    if (errorList.length) {
                        let s = errorList.shift();
                        let n = [];
                        n.push(s);
                        this.errorList = n;
                    }
                    this.defaultShowErrors();
                },
                success: function (label) {
                    label.parent().removeClass('error');
                    label.remove();
                }
            });
        });
    }

    $('.form-flex').validate({
        showErrors: function (errorMap, errorList) {
            if (errorList.length) {
                let s = errorList.shift();
                let n = [];
                n.push(s);
                this.errorList = n;
            }
            this.defaultShowErrors();
        },
        success: function (label) {
            label.parent().removeClass('error');
            label.remove();
        },
        highlight: function (element, errorClass) {
            $(element).parents("input.error").addClass(errorClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".error").removeClass(errorClass);
        }
    });

    if (phoneMask[0]) {
        Inputmask('+380 (99) 999 99 99', { placeholder: '' }).mask(phoneMask);
    }

    if(cartInput[0]) {
        Inputmask('99 шт.', {placeholder: ''}).mask(cartInput);
    }

    if($('.menu-search__select')[0]) {
        $('.menu-search__select').select2({
            minimumResultsForSearch: -1
        });
    }

    if($(formsSelect)[0]) {
        $(formsSelect).select2({
            width: '100%',
            minimumResultsForSearch: -1
        });


        $('.js-reset-forms').click(function () {
            formsSelect.select2("val", "1");
            formsSelect.trigger('change');
        });

        formsSelect.on('select2:select', function () {
            let currentOptionValue = $(this).val();
            let newPrice = $('.item-price--new', '.buy__wrapper');
            let oldPrice = $('.item-price--old', '.buy__wrapper');
            let inStock = $('.quantity__in-stock', '.buy__wrapper');

            if (newPrice.eq(parseInt(currentOptionValue) - 1).data('price') === parseInt(currentOptionValue)) {
                newPrice.addClass('hidden');
                oldPrice.addClass('hidden');
                inStock.addClass('hidden');

                newPrice.eq(parseInt(currentOptionValue) - 1).removeClass('hidden');
                oldPrice.eq(parseInt(currentOptionValue) - 1).removeClass('hidden');
                inStock.eq(parseInt(currentOptionValue) - 1).removeClass('hidden');
            }
        });
    }


    if($('.js-sort-by')[0]) {
        $('.js-sort-by').select2({
            minimumResultsForSearch: -1,
            width: 'unset'
        });
    }

    $.validator.setDefaults({
        debug: true,
        success: 'valid'
    });

    let subscribeButton = $('.sub-button');

    if(subscribeForm[0]) {
        subscribeForm.change(function () {
            if(subscribeForm.valid() === false) {
                subscribeButton.removeAttr('data-mfp-src');
                subscribeButton.removeClass('open');
            }
            else {
                subscribeButton.attr('data-mfp-src', '#subscribed');
            }
        });
    }

    if(commentStar[0]) {
        commentStar.hover(function () {
            let elIndex = commentStar.index(this);

            for (let i = 0; i <= elIndex; i++) {
                commentStar.eq(i).addClass('comment-active-star');
            }
        });

        commentStar.mouseleave(function () {
            let elIndex = commentStar.index(this);

            for (let i = 0; i <= elIndex; i++) {
                commentStar.eq(i).removeClass('comment-active-star');
            }
        });

        commentStar.click(function () {
            commentStar.unbind('hover, mouseleave');

            let elIndex = commentStar.index(this);

            commentStar.val(elIndex + 1);

            for (let i = 0; i <= elIndex; i++) {
                commentStar.eq(i).addClass('comment-active-star');
            }

            let active = elIndex + 1;

            for (let e = 4; active <= e; active++) {
                commentStar.eq(active).removeClass('comment-active-star');
            }

            let activeStars = $('.input-stars');

            activeStars.val(elIndex + 1);

            let activeStarsCount = parseInt(activeStars.val());

            console.log(activeStarsCount);
        });
    }
});
