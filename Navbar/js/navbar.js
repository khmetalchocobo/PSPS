$(document).ready(function(){
    var navBarHeight = $(".navbar").outerHeight();
    var scrolledTop = $('.wrapper').scrollTop();
    $('.wrapper').on('scroll', function() {
        var navBarHeight = $(".navbar").outerHeight();
        var scrolledTop = $('.wrapper').scrollTop();
        if(scrolledTop > navBarHeight && !$(".navbar").data('animated'))
        {
            $('.navbar').css('background-color','rgba(250, 250, 250, 0.95)');
            $('.navbarLinks').css('color', 'black');
            $('#navbarLogo').attr('src', '../../Static/images/company_name.png');
            $('.navbar').data('animated', true);
            return false;
        }
        else if(scrolledTop == 0)
        {
            $('.navbar').css('background-color','rgba(255, 255, 255, 0)');
            $('.navbarLinks').css('color', 'white');
            $('#navbarLogo').attr('src', '../../Static/images/company_name_white.png');
            $('.navbar').removeData('animated');
            return false;

        }
    });
});