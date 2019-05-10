import $ from 'jquery';

$(function() {
    function sum(number) {
        let summ = 0;
        let arr = number.toString().split('');
        for(let i=0; i<arr.length; i++) {
            summ += +arr[i];
        }
        if(arr.length !== 1) {
            return sum(summ);
        }
        return summ;
    }

    sum('3654789987654963599999');
});