$( document ).ready(function() {
    let navParent = $(".nav-item-parent-content").parent();
    navParent.addClass("parentish");
    navParent.mouseenter(function(){
        $(this).children(".nav-item-parent-content").addClass("active");
    });
    navParent.mouseleave(function () {
        $(this).children(".nav-item-parent-content").mouseleave(function () {
            $(this).removeClass("d-flex");
        });
        $(this).children(".nav-item-parent-content").removeClass("active");
    })
});