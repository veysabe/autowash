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