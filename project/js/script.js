$(function () {

    /*появление формы и затемнение фона*/

    icon1 = $('.icon1');
    icon2 = $('.icon2');
    icon3 = $('.icon3');
    icon4 = $('.icon4');
    icon5 = $('.icon5');
    icon6 = $('.icon6');
    form = $('.jc_subblock_1');
    cls = $('.choice__close');
    hidden = $('.hide-layout');
    action = $('#subscr-form-7338')

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

    icon1.click(function () {
        openForm('icon1');
    });

    icon2.click(function () {
        openForm('icon2');
    });

    icon3.click(function () {
        openForm('icon3');
    });

    icon4.click(function () {
        openForm('icon4');
    });

    icon5.click(function () {
        openForm('icon5');
    });

    icon6.click(function () {
        openForm('icon6');
    });

    /*закрытие формы*/

    cls.click(function () {
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

    /*нажатие на видео*/

    video1 = $('#video1');
    video2 = $('#video2');
    video3 = $('#video3');
    video4 = $('#video4');
    video5 = $('#video5');
    play = $('.header__btn-left');

    function clickMouse(dir) {
        if(dir == 'video1'){
            video1.css({background: 'url("../img/video1-2.png") no-repeat center'})
            play.css({left: '-17px'})
        }

        if(dir == 'video2'){
            video2.css({background: 'url("../img/video2-2.png") no-repeat center'})
            play.css({left: '18%'})
        }

        if(dir == 'video3'){
            video3.css({background: 'url("../img/video3-2.png") no-repeat center'})
            play.css({left: '38%'})
        }

        if(dir == 'video4'){
            video4.css({background: 'url("../img/video4-2.png") no-repeat center'})
            play.css({left: '58%'})
        }

        if(dir == 'video5'){
            video5.css({background: 'url("../img/video5-2.png") no-repeat center'})
            play.css({left: '78%'})
        }
    }

    video1.click(function () {
        clickMouse('video1');
    });

    video2.click(function () {
        clickMouse('video2');
    });

    video3.click(function () {
        clickMouse('video3');
    });

    video4.click(function () {
        clickMouse('video4');
    });

    video5.click(function () {
        clickMouse('video5');
    });

});