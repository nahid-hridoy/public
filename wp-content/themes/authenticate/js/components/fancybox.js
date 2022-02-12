import 'Plugins/fancyboxPlugin';

// lightbox init
export default function initFancybox() {
  jQuery('a.fancybox').fancybox({
    parentEl: 'body',
    margin: [50, 0],
    slideShow: false,
    fullScreen: false,
    thumbs: false,
    toolbarCloseBtn: false,
    touch: false,
  });
}
