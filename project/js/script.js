$(function () {

    images = $('.choice__form');
    form = $('.jc_subblock_1');

    images.click(function () {
        form.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)
    });
});