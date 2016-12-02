$(function () {

    /*появление формы и затемнение фона*/

    form = $('.jc_subblock_1');
    hidden = $('.hide-layout');
    action = $('#subscr-form-7338');

    function openForm(a) {
        form.css({display: 'block'}, 500)
            .animate({opacity: 1}, 500)
        hidden.css({background: '#000', opacity: 0.5, width: '100%', height: '100%', bottom: 0, top: 0, position: 'fixed', 'z-index': 10})

        if(a == 'icon1'){
            action.attr('action', '//shop.elizavetababanova.com/subscribe/process/?rid[0]=Sublist_body&doneurl=http%3A%2F%2Fgpp.elizavetababanova.com%2F%3Futm_medium%3Dinternal%26utm_source%3Dlesson1_body&')
        }
        if(a == 'icon2'){
            action.attr('action', '//shop.elizavetababanova.com/subscribe/process/?rid[0]=Sublist_finances&doneurl=http%3A%2F%2Ffinances.elizavetababanova.com%2F%3Futm_source%3Dfunnel%26utm_medium%3Dlesson1_finance&')
        }
        if(a == 'icon3'){
            action.attr('action', '//shop.elizavetababanova.com/subscribe/process/?rid[0]=Sublist_relations&doneurl=http%3A%2F%2Fgpp.elizavetababanova.com%2F%3Futm_source%3Dfunnel%26utm_medium%3Dlesson1_relations&')
        }
        if(a == 'icon4'){
            action.attr('action', '//shop.elizavetababanova.com/subscribe/process/?rid[0]=Sublist_emotions&doneurl=http%3A%2F%2Fgpp.elizavetababanova.com%2F%3Futm_source%3Dfunnel%26utm_medium%3Dlesson1_emotion&')
        }
        if(a == 'icon5'){
            action.attr('action', '//shop.elizavetababanova.com/subscribe/process/?rid[0]=Sublist_profession&doneurl=http%3A%2F%2Ffinances.elizavetababanova.com%2F%3Futm_source%3Dfunnel%26utm_medium%3Dlesson1_profess&')
        }
        if(a == 'icon6'){
            action.attr('action', '//shop.elizavetababanova.com/subscribe/process/?rid[0]=Sublist_effectiveness&doneurl=http%3A%2F%2Ffinances.elizavetababanova.com%2F%3Futm_source%3Dfunnel%26utm_medium%3Dlesson1_effect&')
        }
    }

    $('.icon1').click(function () {
        openForm('icon1');
    });

    $('.icon2').click(function () {
        openForm('icon2');
    });

    $('.icon3').click(function () {
        openForm('icon3');
    });

    $('.icon4').click(function () {
        openForm('icon4');
    });

    $('.icon5').click(function () {
        openForm('icon5');
    });

    $('.icon6').click(function () {
        openForm('icon6');
    });

    /*закрытие формы*/

    $('.choice__close').click(function () {
        form.css({display: 'none'}, 500)
            .animate({opacity: 0}, 500)
        hidden.css({opacity: 0, width: '0', height: '0', 'z-index': 0})
    });

    /*всплывающая форма*/

    $(function () {
        $(".lgroup_datepicker").datepicker($.datepicker.regional["ru"]);
        $(".lgroup_datepicker").datepicker("option", "yearRange", "-100:+20");
        $(".lgroup_datepicker").blur();
    });
});