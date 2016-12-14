$(document).ready(function () {

    //Фиксированная шапка
    // Options
    var options = {
        offset: 400
    }

    // Create a new instance of Headhesive.js and pass in some options
    var header = new Headhesive('.header_shapka', options);

    //Кнопка для раскрытия меню
    $(".main_menu_button").click(function () {
        $(".main_menu").slideToggle();
        return false;
    });

    //Кнопка поиска открывающаяся при клике
    $('.opacity').css({opacity: 0.7});

    $(".search_header").click(function(){
        $(".search_popup").show();
        $(".close_search").show();
        $(".opacity").show();
    });

    $(".close_search").click(function(){
        $(".search_popup").hide();
        $(".close_search").hide();
        $(".opacity").hide();
    });

    //Кнопка "Наверх".
    var btn_up = $('.up_button');

    $(window).scroll(function(){
        if ($(this).scrollTop() > 800) {
            btn_up.fadeIn();
        } else {
            btn_up.fadeOut();
        }
    });

    btn_up.click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /*открытие соц-ссылок в новой вкладке*/
    $(function externalLinks() {

        for (i = 0; i < $('a').length; i++) {
            link = $('a')[i];
            if (link.getAttribute("href") && link.getAttribute("rel") == "external")
                link.target = "_blank";
        }
    });
});