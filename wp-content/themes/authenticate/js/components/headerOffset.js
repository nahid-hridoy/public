export default function headerOffset() {
  const header = jQuery('.main-header');
  const holder = jQuery('.wrapper');
  const win = jQuery(window);
  let height = 0;

  win.on('load', () => {
    height = header.outerHeight();

    if (win.outerWidth() < 1280) {
      holder.css('paddingTop', height - 32);
    } else {
      holder.css('paddingTop', height);
    }
  });

  win.on('resize orientationchange', () => {
    const newHeight = header.outerHeight();

    if (height !== newHeight) {
      if (win.outerWidth() < 1280) {
        holder.css('paddingTop', newHeight - 32);
      } else if (height !== newHeight) {
        holder.css('paddingTop', newHeight);
      }

      height = newHeight;
    }
  });
}
