import $ from 'jquery';

var lastScrollTop = 0;

$(document).scroll(function() {
  let $topoffset = $(document).scrollTop();

  if ($topoffset > 200) {
    $('body').addClass('header-is-stick');
  } else {
    $('body').removeClass('header-is-stick');
  }

  $('.searchwp-live-search-results').removeClass('searchwp-live-search-results-showing');

  // if ($topoffset > lastScrollTop){
  //   $('body').removeClass('destinations-is-sticky');
  // } else {
  //    $('body').addClass('destinations-is-sticky');
  // }
  lastScrollTop = $topoffset;
});
