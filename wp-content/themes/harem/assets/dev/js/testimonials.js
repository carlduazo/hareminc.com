import $ from 'jquery';

$(document).ready(function(){
    // Initialize the testimonials slider
    var mainSlider = $('.testimonials.js').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        margin: 10,
        dots: true,
        autoHeight: true,
        autoplay: true,
        nav: false,
    });

});