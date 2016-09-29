/**
 * Created by V1pBoy on 27.06.2016.
 */
function tagsHide(){
    var windowWidht = $(window).width();
    if (windowWidht < 768 ){
        $(".tag-block .title-block").on("click",function () {
            $(".tag-block .list-tags").toggleClass("show");
        })
    }
}
function addClassMenu() {
    var windowWidth = $(window).width();
    $('.dropdown').hover(function() {
        $(this).addClass("open");
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(0);
    }, function() {
        $(this).removeClass("open");
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(0);
    });
    $(".header-menu ul>.dropdown>a").each(function () {
        var link = $(this).attr('href');
        var jsVoid = 'javascript:void(0);';
        var pageLink = $(this).data('url');
        if (!pageLink){
            $(this).data('url',link);
        }
        if (windowWidth >= 767){
            $(this).attr('href', pageLink);
        }
        else{
            $(this).attr('href' , jsVoid);
        }
    });
}
function stickyHeader(){
    $(window).scroll(function(){
        var sticky = $('.navbar-custom'),
            scroll = $(window).scrollTop();
        if (scroll >= 20) {
            sticky.addClass('fixed');
        } else {
            sticky.removeClass('fixed');
        }
    });
}
$('.about-us-slider').owlCarousel({
    items:1,
    loop:true,
    nav:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    mouseDrag: false,
    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"]
});
$(document).ready(function () {
    // Enter your ids or classes
    var toggler = '.navbar-toggle';
    var pagewrapper = '#page-content';
    var footerContent = '#footer-slide';
    var navigationwrapper = '.navbar-header';
    var menuwidth = '100%'; // the menu inside the slide menu itself
    var slidewidth = '240px';
    var menuneg = '-100%';
    var slideneg = '-240px';

    $("#slide-nav").on("click", toggler, function (e) {

        var selected = $(this).hasClass('slide-active');

        $('#slidemenu').stop().animate({
            right: selected ? menuneg : '0px'
        });

        $('#navbar-height-col').stop().animate({
            right: selected ? slideneg : '0px'
        });

        $(pagewrapper).stop().animate({
            right: selected ? '0px' : slidewidth
        });

        $(navigationwrapper).stop().animate({
            right: selected ? '0px' : slidewidth
        });

        $(footerContent).stop().animate({
            right: selected ? '0px' : slidewidth
        });
        $(this).toggleClass('slide-active', !selected);
        $('#slidemenu').toggleClass('slide-active');


        $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');
    });
    var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';
    $(window).on("resize", function () {

        if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
            $(selected).removeClass('slide-active');
        }
    });
    tagsHide();
    stickyHeader();
    addClassMenu();
});
$(window).resize(function () {
    addClassMenu();
});