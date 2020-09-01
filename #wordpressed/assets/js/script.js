$( document ).ready(function() {
    let navParent = $(".sub-menu").parent();
    navParent.mouseenter(function(){
        $(this).children(".sub-menu").addClass("active");
    });
    navParent.mouseleave(function () {
        $(this).children(".sub-menu").mouseleave(function () {
            $(this).removeClass("d-flex");
        });
        $(this).children(".sub-menu").removeClass("active");
    })
});
$( document ).ready(function() {
    $(".burger-icon__open").click(function () {
        $(this).addClass('icon-open');
        $(".burger-icon__close").addClass("icon-close");
        $(".burger-icon__open").css("z-index", "0");
        $("body").addClass("overflow-hidden");
        $(".header__mobile-menu-content").removeClass("d-none");
        setTimeout(function (){
            $(".header__mobile-menu-content").addClass("active");
        }, 2);
        $('.header__mobile-menu').append("<div id='bg-for-menu'></div>");
        setTimeout(function (){
            $("#bg-for-menu").addClass('bg-for-menu');
        }, 2);
    })
    $(".burger-icon__close").click(function () {
        $(this).removeClass('icon-close');
        $(".burger-icon__open").removeClass("icon-open");
        $(".burger-icon__open").css("z-index", "4");
        $("body").removeClass("overflow-hidden");
        $(".header__mobile-menu-content").removeClass("active");
        setTimeout(function (){
            $(".header__mobile-menu-content").addClass("d-none");
        }, 302);
        $("div#bg-for-menu").removeClass('bg-for-menu');
        setTimeout(function (){
            $("div#bg-for-menu").remove();
        }, 301);
    })
});

$(".vers-button").click(function () {
    $("body").toggleClass("pixel-perfect");
})