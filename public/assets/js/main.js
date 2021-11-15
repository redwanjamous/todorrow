$(window).ready(function () {
    $(".menu").click(function () {
        $(".menu-line").toggleClass("menu-active");
        $(".sidebar").toggleClass("sidebar-active");      
    });  
});