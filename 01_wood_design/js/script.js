$(function(){
    
    $('.menu_toggle').click(function(){
        $('nav ul').slideToggle(500);
    });

    $('.aside_toggle').click(function(){
        $('aside ul').slideToggle(500);
    });

    $(function externalLinks() {

        for (i = 0; i < $('a').length; i++) {
            link = $('a')[i];
            if (link.getAttribute("href") && link.getAttribute("rel") == "external")
                link.target = "_blank";
        }
    });

});