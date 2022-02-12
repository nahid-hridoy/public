import 'Plugins/anchorPlugin';

// initialize smooth anchor links
const initAnchorLink = () => {
  const button = document.querySelectorAll('.page-nav .navbar-nav a');

  const anchorLink = new window.SmoothScroll({
    anchorLinks: button,
    extraOffset: () => {
      const win = jQuery(window);
      let totalHeight = 70;

      if (win.outerWidth() >= 1280) {
        totalHeight = 90;
      }

      return totalHeight;
    },
    activeClasses: 'parent',
    anchorActiveClass: 'active',
    wheelBehavior: 'none',
  });

  anchorLink.init();
};

export default initAnchorLink;
