//mobile navigation
$(window).ready(function () {
    $('.fa-bars').on('click', function () {
        $('.mobile-nav').css('left', '0');
        $('.fa-bars').hide();
        $('.fa-times').show();
    });
    $('.fa-times').on('click', function () {
        $('.mobile-nav').css('left', '-250px');
        $('.fa-times').hide();
        $('.fa-bars').show();
    });
});

//indicating page location
$(window).ready(function () {
    $("nav a[href]").each(function () {
        if (this.href == window.location.href) {
            $(this).css('border-bottom', '3px dotted rgb(103, 103, 103)');
        }
    });
});