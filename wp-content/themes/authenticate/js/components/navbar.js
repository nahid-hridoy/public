// navbar init
export default function initNavbar($navbarClass, $openerClass, $activeClass, $breakpoint) {
  const body = jQuery('body');
  const win = jQuery(window);

  const expandBreakpoint = $breakpoint || 1280;
  const navbar = jQuery($navbarClass);
  const opener = jQuery($openerClass);
  const activeClass = $activeClass;

  opener.on('click', function () {
    body.toggleClass(activeClass);
  });

  win.on('resize orientationchange', function () {
    if (win.width() >= expandBreakpoint) {
      body.removeClass(activeClass);
    } else if (win.width() < expandBreakpoint && navbar.hasClass('show')) {
      body.addClass(activeClass);
    }
  });
}
