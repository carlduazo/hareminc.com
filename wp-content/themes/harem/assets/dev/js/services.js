import $ from 'jquery';

$(document).ready(function(){
    $('.services,js').owlCarousel({
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
            items: 3,
            loop: false,
            nav: false,
            margin: 30
        }
        }
    });
});