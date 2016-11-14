$(function () {

    /*таймер*/

    var deadline = '2016-11-25';

    function timeLeft(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function showTimer(className, endtime) {
        var days = document.getElementById('timer__days');
        var hours = document.getElementById('timer__hours');
        var minutes = document.getElementById('timer__minutes');
        var seconds = document.getElementById('timer__seconds');
        var timeinterval = setInterval(function () {
            var t = timeLeft(endtime);
            days.innerHTML = t.days;
            hours.innerHTML = t.hours;
            minutes.innerHTML = t.minutes;
            seconds.innerHTML = t.seconds;
            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }, 1000);
    }

    showTimer('timer__down', deadline);

    /*слайдер*/

    $(document).ready(function(){
        var owl = $(".owl-carousel").owlCarousel({
            items: 1,
            slideSpeed: 500,
            autoPlay: true,
            autoPlayTimeout: 4500,
            loop: true,
            mouseDrag: false,
            singleItem: true,
            dots: true,
            margin: 85,
            itemElement:'li',
            stageElement:'ul',
            dotsClass:'slider__pager',
            navigation: true,
            navigationText: false
        }).data('owlCarousel');

    });

    /*открытие-закрытие блоков*/

    $show_events = $('.events__item');

    for (var i = 0; i < $show_events.length; i++) {
        $show_events[i].onclick = function () {
            if (this.classList.contains('events__show')) {
                this.classList.remove('events__show');
            }
            else {
                this.classList.add('events__show');
            }
        }
    }

    $show_questions = $('.questions__item');

    for (var i = 0; i < $show_questions.length; i++) {
        $show_questions[i].onclick = function () {
            if (this.classList.contains('questions__answer')) {
                this.classList.remove('questions__answer');
            }
            else {
                this.classList.add('questions__answer');
            }
        }
    }

    /*открытие соц-ссылок в новой вкладке*/

    $(function externalLinks() {

        for (i = 0; i < $('a').length; i++) {
            link = $('a')[i];
            if (link.getAttribute("href") && link.getAttribute("rel") == "external")
                link.target = "_blank";
        }
    });
});


