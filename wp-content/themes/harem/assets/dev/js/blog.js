import $ from 'jquery';

$(document).ready(function(){
    $('.blogs:not(.blogs--default)').owlCarousel({
        center: false,
        items: 2,
        loop: false,
        margin: 15,
        dots: true,
        autoWidth: false,
        autoplay: true,
        nav: false,
        responsive: {
        576 : {
            center: false,
            items: 4,
            loop: false,
            nav: false,
            margin: 30
        }
        }
    });
});