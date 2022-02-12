/* eslint-disable */

/*
 * Popups plugin
 */
; (function ($) {
  function ContentPopup(opt) {
    this.options = $.extend({
      holder: null,
      popup: '.popup',
      btnOpen: '.open',
      btnClose: '.close',
      openClass: 'popup-active',
      clickEvent: 'click',
      mode: 'click',
      hideOnClickLink: true,
      hideOnClickOutside: true,
      delay: 50
    }, opt);
    if (this.options.holder) {
      this.holder = $(this.options.holder);
      this.init();
    }
  }
  ContentPopup.prototype = {
    init: function () {
      this.findElements();
      this.attachEvents();
    },
    findElements: function () {
      this.popup = this.holder.find(this.options.popup);
      this.btnOpen = this.holder.find(this.options.btnOpen);
      this.btnClose = this.holder.find(this.options.btnClose);
    },
    attachEvents: function () {
      // handle popup openers
      var self = this;
      this.clickMode = isTouchDevice || (self.options.mode === self.options.clickEvent);

      if (this.clickMode) {
        // handle click mode
        this.btnOpen.bind(self.options.clickEvent + '.popup', function (e) {
          if (self.holder.hasClass(self.options.openClass)) {
            if (self.options.hideOnClickLink) {
              self.hidePopup();
            }
          } else {
            self.showPopup();
          }
          e.preventDefault();
        });

        // prepare outside click handler
        this.outsideClickHandler = this.bind(this.outsideClickHandler, this);
      } else {
        // handle hover mode
        var timer, delayedFunc = function (func) {
          clearTimeout(timer);
          timer = setTimeout(function () {
            func.call(self);
          }, self.options.delay);
        };
        this.btnOpen.on('mouseover.popup', function () {
          delayedFunc(self.showPopup);
        }).on('mouseout.popup', function () {
          delayedFunc(self.hidePopup);
        });
        this.popup.on('mouseover.popup', function () {
          delayedFunc(self.showPopup);
        }).on('mouseout.popup', function () {
          delayedFunc(self.hidePopup);
        });
      }

      // handle close buttons
      this.btnClose.on(self.options.clickEvent + '.popup', function (e) {
        self.hidePopup();
        e.preventDefault();
      });
    },
    outsideClickHandler: function (e) {
      // hide popup if clicked outside
      var targetNode = $((e.changedTouches ? e.changedTouches[0] : e).target);
      if (!targetNode.closest(this.popup).length && !targetNode.closest(this.btnOpen).length) {
        this.hidePopup();
      }
    },
    showPopup: function () {
      this.makeCallback('onShow', this);
      // reveal popup
      this.holder.addClass(this.options.openClass);
      this.popup.css({
        display: 'block'
      });

      // outside click handler
      if (this.clickMode && this.options.hideOnClickOutside && !this.outsideHandlerActive) {
        this.outsideHandlerActive = true;
        $(document).on('click touchstart', this.outsideClickHandler);
      }
    },
    hidePopup: function () {
      // hide popup
      this.holder.removeClass(this.options.openClass);
      this.popup.css({
        display: 'none'
      });

      // outside click handler
      if (this.clickMode && this.options.hideOnClickOutside && this.outsideHandlerActive) {
        this.outsideHandlerActive = false;
        $(document).off('click touchstart', this.outsideClickHandler);
      }
      this.makeCallback('onHide', this);
    },
    bind: function (f, scope, forceArgs) {
      return function () {
        return f.apply(scope, forceArgs ? [forceArgs] : arguments);
      };
    },
    destroy: function () {
      this.popup.removeAttr('style');
      this.holder.removeClass(this.options.openClass);
      this.btnOpen.add(this.btnClose).add(this.popup).off('.popup');
      $(document).off('click touchstart', this.outsideClickHandler);
    },
    makeCallback: function (name) {
      if (typeof this.options[name] === 'function') {
        var args = Array.prototype.slice.call(arguments);
        args.shift();
        this.options[name].apply(this, args);
      }
    }
  };

  // detect touch devices
  var isTouchDevice = /Windows Phone/.test(navigator.userAgent) || ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch;

  // jQuery plugin interface
  $.fn.contentPopup = function (opt) {
    var args = Array.prototype.slice.call(arguments);
    var method = args[0];

    return this.each(function () {
      var $holder = jQuery(this);
      var instance = $holder.data('ContentPopup');

      if (typeof opt === 'object' || typeof opt === 'undefined') {
        $holder.data('ContentPopup', new ContentPopup($.extend({
          holder: this
        }, opt)));
      } else if (typeof method === 'string' && instance) {
        if (typeof instance[method] === 'function') {
          args.shift();
          instance[method].apply(instance, args);
        }
      }
    });
  };
}(jQuery));