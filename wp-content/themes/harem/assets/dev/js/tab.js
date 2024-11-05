import $ from 'jquery';

$(document).on('click', '.tab-title.js', function(event){
  var $this = $(this);
  var tab = $this.data('tab');
  var tabContentActive = $this.parents('.tab-group.js').find('.tab-content[data-tab="' + tab + '"]');

  $('.tab-group.js').find('.tab-title.js').not($this).removeClass('tab-title-active');
  $this.addClass('tab-title-active')
  $('.tab-group.js').find('.tab-content').not(tabContentActive).removeClass('tab-content-active');
  tabContentActive.addClass('tab-content-active');
  

  var locationsMap = $('.locations__map');
  
  if(locationsMap.length > 0) {
    
  }
});
