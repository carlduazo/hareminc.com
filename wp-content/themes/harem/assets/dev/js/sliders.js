import $ from 'jquery';
$(document).ready(function(){
$('.gallery-images--partners').owlCarousel({
    center: false,
    items: 2,
    loop:false,
    margin: 20,
    dots: true,
    autoWidth: false,
    autoplay: true,
    responsive: {
      768 : {
          items: 3,
          margin:40,
          center: false,
      }
    }
  });

});