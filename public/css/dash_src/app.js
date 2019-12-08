$(document).ready(function() {
    $('#myloader').css("display", "none");

    $('.sidebar-expand i').click(function() {
        $('#nav-sidebar').toggleClass("active");
    });
    //Customize Bootstrap dropdown speed
    $('.dropdown').on('show.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });

    $('.dropdown').on('hide.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
    });

});