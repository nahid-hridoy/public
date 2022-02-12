//  init focusOnInput
export default function initFocusInput() {
  const item = jQuery('.custom-label-position [type="search"]');
  const aC = 'focus';

  item.each(function (index, el) {
    const $this = jQuery(el);

    if ($this.val().length > 1) {
      $this.addClass(aC);
    }
  });

  item
    .on('focus', function () {
      const $this = jQuery(this);

      $this.addClass(aC);
    })
    .on('blur', function () {
      const $this = jQuery(this);

      if ($this.val().length < 1) {
        $this.removeClass(aC);
      }
    });
}
