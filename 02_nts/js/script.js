$(function externalLinks() {

    for (i=0; i<$('a').length; i++) {
        link = $('a')[i];
        if (link.getAttribute("href") && link.getAttribute("rel") == "external")
            link.target = "_blank";
    }
});