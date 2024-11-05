/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./dev/images/index.js":
/*!*****************************!*\
  !*** ./dev/images/index.js ***!
  \*****************************/
/***/ (() => {



/***/ }),

/***/ "./dev/js/accordion.js":
/*!*****************************!*\
  !*** ./dev/js/accordion.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.accordion-title.js', function (event) {
  var $this = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this);
  var $accordion = $this.parents('.accordion.js');
  var windowWidth = jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).width();
  $this.parents('.accordion-group.js').find('.accordion.js').not($accordion).removeClass('accordion-active').find('.accordion-content.js').slideUp();
  $accordion.toggleClass('accordion-active').find('.accordion-content.js').slideToggle('300');
  setTimeout(function () {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('html, body').animate({
      scrollTop: $this.offset().top - 150
    });
  }, 500);
  var map = $this.find('#google_map').val();
  var locationsMap = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.locations__map');
  if (locationsMap.length > 0) {
    if (map !== '') {
      locationsMap.html(map);
    }
  }
  event.preventDefault();
});

/***/ }),

/***/ "./dev/js/blog.js":
/*!************************!*\
  !*** ./dev/js/blog.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.blogs:not(.blogs--default)').owlCarousel({
    center: false,
    items: 2,
    loop: false,
    margin: 15,
    dots: true,
    autoWidth: false,
    autoplay: true,
    nav: false,
    responsive: {
      576: {
        center: false,
        items: 4,
        loop: false,
        nav: false,
        margin: 30
      }
    }
  });
});

/***/ }),

/***/ "./dev/js/brands.js":
/*!**************************!*\
  !*** ./dev/js/brands.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).ready(function () {
  // Initialize the first slider
  var navSlider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.brands__nav.js').owlCarousel({
    center: false,
    items: 3,
    loop: false,
    margin: 30,
    dots: false,
    autoWidth: true,
    autoplay: true,
    nav: false
  });

  // Initialize the second slider
  var mainSlider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.brands__slider.js').owlCarousel({
    center: false,
    items: 1,
    loop: true,
    margin: 10,
    dots: false,
    autoHeight: true,
    autoplay: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    nav: true,
    navText: ['<i class="icon icon-angle-left"></i>', '<i class="icon icon-angle-right"></i>']
  });

  // Synchronize the navigation with the main slider
  navSlider.on('click', '.owl-item', function () {
    var index = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).index(); // Get the index of the clicked item
    mainSlider.trigger('to.owl.carousel', index); // Go to the corresponding item in the main slider

    // Update active class on nav items
    navSlider.find('.owl-item').removeClass('is-active'); // Remove is-active class from all nav items
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('is-active'); // Add is-active class to the clicked nav item
  });

  // Update active and is-active classes on nav item when the main slider changes
  mainSlider.on('changed.owl.carousel', function (event) {
    var index = event.item.index; // Get the current item index
    navSlider.find('.owl-item').removeClass('active is-active'); // Remove both active and is-active class from all nav items
    navSlider.find('.owl-item').eq(index).addClass('active is-active'); // Add active and is-active class to the current item in nav
  });

  // Initialize the first nav item as is-active on page load
  navSlider.find('.owl-item').eq(0).addClass('is-active');
  mainSlider.on('click', '.owl-next, .owl-prev', function () {
    var index = mainSlider.find('.owl-item.active').index(); // Get the index of the currently active main slider item
    navSlider.find('.owl-item').removeClass('is-active'); // Remove is-active class from all nav items
    navSlider.find('.owl-item').eq(index).addClass('is-active'); // Add is-active class to the corresponding nav item
  });
});

/***/ }),

/***/ "./dev/js/dimmer.js":
/*!**************************!*\
  !*** ./dev/js/dimmer.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.button--show-video', function () {
  var $this = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this);
  var videoLink = $this.data('video-link');
  var iframeEmbed = 'https://www.youtube.com/embed/' + videoLink + '?autoplay=1&controls=1&playlist=' + videoLink + '&rel=0&modestbranding=1&showinfo=0&autohide=1';
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.video--youtube').attr('src', iframeEmbed);
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.dimmer--media.js').dimmer('show');
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.videos__frame iframe').each(function () {
    var thisVideoCurrent = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).attr('data-video');
    var iframeEmbed_current = 'https://www.youtube.com/embed/' + thisVideoCurrent + '?autoplay=0&controls=1&playlist=' + thisVideoCurrent + '&rel=0&modestbranding=1&showinfo=0&autohide=1?enablejsapi=1';
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).attr('src', iframeEmbed_current);
  });
});
jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.dimmer__close', function () {
  var $this = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this);
  $this.parents('.ui.dimmer').dimmer('hide').dimmer({
    onHide: function () {}
  });
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.video--youtube').removeAttr('src');
});

/***/ }),

/***/ "./dev/js/index.js":
/*!*************************!*\
  !*** ./dev/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _accordion__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./accordion */ "./dev/js/accordion.js");
/* harmony import */ var _blog__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./blog */ "./dev/js/blog.js");
/* harmony import */ var _brands__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./brands */ "./dev/js/brands.js");
/* harmony import */ var _dimmer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./dimmer */ "./dev/js/dimmer.js");
/* harmony import */ var _lasktop_nav__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./lasktop-nav */ "./dev/js/lasktop-nav.js");
/* harmony import */ var _phablet__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./phablet */ "./dev/js/phablet.js");
/* harmony import */ var _services__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./services */ "./dev/js/services.js");
/* harmony import */ var _tab__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./tab */ "./dev/js/tab.js");
/* harmony import */ var _testimonials__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./testimonials */ "./dev/js/testimonials.js");










/***/ }),

/***/ "./dev/js/lasktop-nav.js":
/*!*******************************!*\
  !*** ./dev/js/lasktop-nav.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

var lastScrollTop = 0;
jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).scroll(function () {
  let $topoffset = jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).scrollTop();
  if ($topoffset > 200) {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('body').addClass('header-is-stick');
  } else {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('body').removeClass('header-is-stick');
  }
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.searchwp-live-search-results').removeClass('searchwp-live-search-results-showing');

  // if ($topoffset > lastScrollTop){
  //   $('body').removeClass('destinations-is-sticky');
  // } else {
  //    $('body').addClass('destinations-is-sticky');
  // }
  lastScrollTop = $topoffset;
});

/***/ }),

/***/ "./dev/js/phablet.js":
/*!***************************!*\
  !*** ./dev/js/phablet.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

// Variables
// -----------------------------------------------------------------------------
const $body = jquery__WEBPACK_IMPORTED_MODULE_0___default()('body');
const $open = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.js.phablet-nav-link');
jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.phablet-nav-link.js', function () {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('body').toggleClass('phablet-nav-is-active');
});
jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.menu-expand.js', function () {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).toggleClass('expanded');
  jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).parents('li').find('.submenu').toggleClass('submenu-expanded');
});

/***/ }),

/***/ "./dev/js/services.js":
/*!****************************!*\
  !*** ./dev/js/services.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.services,js').owlCarousel({
    center: false,
    items: 2,
    loop: false,
    margin: 15,
    dots: true,
    autoWidth: false,
    autoplay: true,
    nav: false,
    responsive: {
      576: {
        center: false,
        items: 3,
        loop: false,
        nav: false,
        margin: 30
      }
    }
  });
});

/***/ }),

/***/ "./dev/js/tab.js":
/*!***********************!*\
  !*** ./dev/js/tab.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).on('click', '.tab-title.js', function (event) {
  var $this = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this);
  var tab = $this.data('tab');
  var tabContentActive = $this.parents('.tab-group.js').find('.tab-content[data-tab="' + tab + '"]');
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.tab-group.js').find('.tab-title.js').not($this).removeClass('tab-title-active');
  $this.addClass('tab-title-active');
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.tab-group.js').find('.tab-content').not(tabContentActive).removeClass('tab-content-active');
  tabContentActive.addClass('tab-content-active');
  var locationsMap = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.locations__map');
  if (locationsMap.length > 0) {}
});

/***/ }),

/***/ "./dev/js/testimonials.js":
/*!********************************!*\
  !*** ./dev/js/testimonials.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).ready(function () {
  // Initialize the testimonials slider
  var mainSlider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.testimonials.js').owlCarousel({
    center: false,
    items: 1,
    loop: true,
    margin: 10,
    dots: true,
    autoHeight: true,
    autoplay: true,
    nav: false
  });
});

/***/ }),

/***/ "./dev/scss/index.js":
/*!***************************!*\
  !*** ./dev/scss/index.js ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./app.scss */ "./dev/scss/app.scss");
/* harmony import */ var _app_gutenberg_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./app-gutenberg.scss */ "./dev/scss/app-gutenberg.scss");



/***/ }),

/***/ "./dev/scss/app-gutenberg.scss":
/*!*************************************!*\
  !*** ./dev/scss/app-gutenberg.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./dev/scss/app.scss":
/*!***************************!*\
  !*** ./dev/scss/app.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/***/ ((module) => {

"use strict";
module.exports = jQuery;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!**********************!*\
  !*** ./dev/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _images__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./images */ "./dev/images/index.js");
/* harmony import */ var _images__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_images__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scss */ "./dev/scss/index.js");
/* harmony import */ var _js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js */ "./dev/js/index.js");
// Modules
// import 'bootstrap'; // We want to use PlainJS
// import 'bootstrap.native/dist/bootstrap-native-v4';

// Icons
// import './icons';

// Images


// SCSS


// JS

})();

/******/ })()
;
//# sourceMappingURL=app.js.map