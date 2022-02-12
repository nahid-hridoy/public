import 'Plugins/popupPlugin';

// popups init
export default function initPopup() {
  jQuery('.search-popup-wrapper').contentPopup({
    mode: 'click',
    popup: '.search-popup',
    btnOpen: '.popup-opener',
    btnClose: '.popup-close',
    hideOnClickOutside: 'popup-active',
    onShow: () => {
      const expandBreakpoint = 1280;
      const win = jQuery(window);
      const activeClass = 'search-open';
      const navbar = jQuery('.main-header .navbar-collapse');
      const body = jQuery('body');

      jQuery('body').addClass(activeClass);

      win.on('resize orientationchange', function () {
        if (win.width() < expandBreakpoint && !navbar.hasClass('show')) {
          body.removeClass(activeClass);
        }
      });
    },
    onHide: () => {
      jQuery('body').removeClass('search-open');
    },
  });
}
