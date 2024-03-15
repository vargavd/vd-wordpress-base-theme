"use strict";
jQuery(function ($) {
    var $window = $(window), $header = $('#masthead'), $menus = $('#menus'), $topbarMagnifier = $('#topbar-search-button'), $topbarSearchForm = $('#topbar form.search-form'), $openCloseMobileMenu = $('#hamburger-menu, #mobile-menu-close'), scrollEvent = function () {
        $header.toggleClass('fixed', window.scrollY > 0);
    }, openCloseTopbarSearch = function () {
        $topbarSearchForm.toggleClass('shown');
    }, openCloseMobileMenu = function () {
        $menus.toggleClass('shown');
    };
    $window.on('scroll', scrollEvent);
    $topbarMagnifier.on('click', openCloseTopbarSearch);
    $openCloseMobileMenu.on('click', openCloseMobileMenu);
    AOS.init();
});
//# sourceMappingURL=main.js.map