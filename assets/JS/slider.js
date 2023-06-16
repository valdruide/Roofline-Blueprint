


$(document).ready(function(){
    $('.carousel').slick({
        infinite: false,
        dots:true,
        arrows: true,
        adaptiveHeight: true,
        appendArrows: $('.arrowDiv'),
        appendDots: $('.dotDiv'),
        nextArrow: '<p class="arrow">➡</p>',
        prevArrow: '<p class="arrow">⬅</p>',
    });
});