jQuery(document).ready(function( $ ) {
    // Slick
    $('.recent-activity-container').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        appendArrows: $('.recent-activity-container'),
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fal fa-angle-up' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fal fa-angle-down' aria-hidden='true'></i></button>",
    });
});//close all jquery