/*  ::

    :: Theme        : Jets
    :: Theme URI    : http://labs.funcoders.com/html/Jets

    :: File         : theme-options.js
    :: About        : Scripts for options
    :: Version      : 1.3

::  */
$(function () {

    /*  ************  */
    /*  SAVE OPTIONS  */
    /*  ************  */
    $('#theme-options select').change(function() {

        var name    = $(this).attr('name'),
            value   = $(this).val();

        $.cookie(name, value);

        window.location.reload();

    });

    $("#theme-options .option-content a").click(function() {

        var name    = $(this).closest("ul").attr("data-name"),
            value   = $(this).attr("href"),
            bgStyle;

        if (name === "jets-bg") {

            if (value.indexOf('pat-') > -1) {
                bgStyle = {
                    "background-image" : "url('../CORE/uploads/images/page/patterns/" + value.replace('pat-', '') + "/" + value.replace('pat-', '') + ".png')",
                    "background-attachment": "scroll",
                    "background-size": "auto",
                    "background-repeat": "repeat repeat"
                };
            } else {
                bgStyle = {
                    "background-image" : "url('../CORE/uploads/images/page/backgrounds/" + value.replace('bg-', '') + "/background.jpg')",
                    "background-attachment": "fixed",
                    "background-size": "cover",
                    "background-repeat": "no-repeat no-repeat"
                };
            }
            $("body").removeAttr('style').css(bgStyle);

        } else if (name === "jets-color") {
            $('#layout-color').attr('href', 'css/color/' + value + '.css');
        }

        $("ul[data-name=" + name + "] a").removeClass("active");
        $(this).addClass("active");

        $.cookie(name, value);

        return false;
    });

    $("#bg-changer a").click(function() {
        $(this).addClass("active").siblings().removeClass("active");

        $("#bg-changer-target").removeClass("container-dark container-light").addClass($(this).attr("href"));

        return false;
    });

    $("#main-menu a").click(function(event) {
        var name    = $(this).data('name'),
            value   = $(this).attr('href');

        if (name) {

            event.preventDefault();

            $.cookie(name, value);

            window.location.reload();
        }
    });
    
    /*  SCRIPT TAMBAHAN
    /* ----------------------------------------------------------- */
    /*  NAVBAR ACTIVE CLASS
    /* ----------------------------------------------------------- */ 
    //add active class on navigation
    var url = window.location;
    $('#main-menu a[href="' + url + '"]').parent('li').addClass('active');
    $('#main-menu a').filter(function () {
        return this.href == url;
    }).parent('li').addClass('active').parent('ul').addClass('active').parent().addClass('active');
});