$(document).ready(function() {
    //jQuery code goes here
    $('.nav_toggle_icon').on('click', function() {
        $('#modal_mobile_nav').css('height', '100%');
    });


    $('.closebtn').on('click', function() {
        $('#modal_mobile_nav').css('height', '0%');
    });
});