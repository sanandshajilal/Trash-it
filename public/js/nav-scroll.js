// jQuery to change the color of the Navbar
  $(window).scroll(function() {
  if ($(document).scrollTop() > 450) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});


//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 550) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery to change logo on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 450) {
        $('.navbar-brand img').attr('src', 'public/img/logo_dark.png').fadeIn("3000");
    } else {
        $('.navbar-brand img').attr('src', 'public/img/logo_light.png').fadeIn("3000");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
/*Navbar on click response */
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$('body').scrollspy({
    target: '.navbar-fixed-top'
})
