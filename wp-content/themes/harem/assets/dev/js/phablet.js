import $ from 'jquery';
// Variables
// -----------------------------------------------------------------------------
const $body = $('body');
const $open = $('.js.phablet-nav-link');

$(document).on('click', '.phablet-nav-link.js', function() {
  $('body').toggleClass('phablet-nav-is-active');
});

$(document).on('click', '.menu-expand.js', function() {
    $(this).toggleClass('expanded');
    $(this).parents('li').find('.submenu').toggleClass('submenu-expanded');
});
  