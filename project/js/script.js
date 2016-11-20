$(function () {

    images = $('.choice__form');
    form = $('.jc_subblock_1');
    cls = $('.choice__close');
    body = $('body');
    hidden = $('.hide-layout');

    images.click(function () {
        form.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    cls.click(function () {
        form.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });
});
