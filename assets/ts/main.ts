declare var AOS: any;

jQuery(function ($) {
  var
    // DOM GENERAL
    $window = $(window),

    // DOM header
    $header = $('#masthead'),
    $menus = $('#menus'),
    $topbarMagnifier = $('#topbar-search-button'),
    $topbarSearchForm = $('#topbar form.search-form'),
    $openCloseMobileMenu = $('#hamburger-menu, #mobile-menu-close'),

    // events
    scrollEvent = function () {
      $header.toggleClass('fixed', window.scrollY > 0);
    },
    openCloseTopbarSearch = function () {
      $topbarSearchForm.toggleClass('shown');
    },
    openCloseMobileMenu = function () {
      $menus.toggleClass('shown');
    };

  $window.on('scroll', scrollEvent);
  $topbarMagnifier.on('click', openCloseTopbarSearch);
  $openCloseMobileMenu.on('click', openCloseMobileMenu);

  // init AOS animation lib
  AOS.init();
});
