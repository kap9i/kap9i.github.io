$(function () {

    icon1 = $('.icon1');
    icon2 = $('.icon2');
    icon3 = $('.icon3');
    icon4 = $('.icon4');
    icon5 = $('.icon5');
    icon6 = $('.icon6');
    form1 = $('.form1');
    form2 = $('.form2');
    form3 = $('.form3');
    form4 = $('.form4');
    form5 = $('.form5');
    form6 = $('.form6');
    cls = $('.choice__close');
    hidden = $('.hide-layout');

    /*появление формы и затемнение фона*/

    icon1.click(function () {
        form1.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    icon2.click(function () {
        form2.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    icon3.click(function () {
        form3.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    icon4.click(function () {
        form4.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    icon5.click(function () {
        form5.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    icon6.click(function () {
        form6.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)

        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed'})

    });

    /*закрытие формы*/

    cls.click(function () {
        form1.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });

    cls.click(function () {
        form2.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });

    cls.click(function () {
        form3.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });

    cls.click(function () {
        form4.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });

    cls.click(function () {
        form5.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });

    cls.click(function () {
        form6.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)

        hidden.css({opacity: 0, width: '0', height: '0'})
    });

    /*всплывающая форма*/

    $(function () {
        $(".lgroup_datepicker").datepicker($.datepicker.regional["ru"]);
        $(".lgroup_datepicker").datepicker("option", "yearRange", "-100:+20");
        $(".lgroup_datepicker").blur();
    });
});
