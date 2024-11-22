import $ from 'jquery';

$(document).ready(function(){
    // Initialize the first slider
    var navSlider = $('.brands__nav.js').owlCarousel({
        center: false,
        items: 3,
        loop: false,
        margin: 30,
        dots: false,
        autoWidth: true,
        autoplay: true,
        nav: false,
    });

    // Initialize the second slider
    var mainSlider = $('.brands__slider.js').owlCarousel({
        center: false,
        items: 1,
        loop: true,
        margin: 10,
        dots: false,
        autoHeight: true,
        autoplay: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav: false,
        navText: ['<i class="icon icon-angle-left"></i>', '<i class="icon icon-angle-right"></i>'],
        responsive: {
            768 : {
                nav: true,
            }
        }
    });

   // Synchronize the navigation with the main slider
    navSlider.on('click', '.owl-item', function() {
        var index = $(this).index(); // Get the index of the clicked item
        mainSlider.trigger('to.owl.carousel', index); // Go to the corresponding item in the main slider
        
        // Update active class on nav items
        navSlider.find('.owl-item').removeClass('is-active'); // Remove is-active class from all nav items
        $(this).addClass('is-active'); // Add is-active class to the clicked nav item
    });

    // Update active and is-active classes on nav item when the main slider changes
    mainSlider.on('changed.owl.carousel', function(event) {
        var index = event.item.index; // Get the current item index
        navSlider.find('.owl-item').removeClass('active is-active'); // Remove both active and is-active class from all nav items
        navSlider.find('.owl-item').eq(index).addClass('active is-active'); // Add active and is-active class to the current item in nav
    });

    // Initialize the first nav item as is-active on page load
    navSlider.find('.owl-item').eq(0).addClass('is-active');

    mainSlider.on('click', '.owl-next, .owl-prev', function() {
        var index = mainSlider.find('.owl-item.active').index(); // Get the index of the currently active main slider item
        navSlider.find('.owl-item').removeClass('is-active'); // Remove is-active class from all nav items
        navSlider.find('.owl-item').eq(index).addClass('is-active'); // Add is-active class to the corresponding nav item
    });
});