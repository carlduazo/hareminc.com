import $ from 'jquery';

$(document).on('click', '.accordion-title.js', function(event){
  var $this = $(this);
  var $accordion = $this.parents('.accordion.js');
  var windowWidth = $(window).width();
  
  $this.parents('.accordion-group.js').find('.accordion.js').not($accordion).removeClass('accordion-active').find('.accordion-content.js').slideUp();
  $accordion.toggleClass('accordion-active').find('.accordion-content.js').slideToggle('300');
  setTimeout(function(){
          $('html, body').animate({
              scrollTop: $this.offset().top - 150
          });
  },500);

  var map = $this.find('#google_map').val();
  var locationsMap = $('.locations__map');

  if(locationsMap.length > 0) {
    
    if(map !== '') {
      locationsMap.html(map);
    }
  }

  event.preventDefault();
});
