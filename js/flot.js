/* Copyright 2014 Towry Wang. */

;(function ($, undefined) {
  if (typeof console == undefined || console.debug === undefined) {
    console = window.console || {};
    console.debug = console.debug || function (a) {
      return true;
    }
  }

  function Lightbox(v) {
    if (! (v instanceof jQuery) ) {
      console.debug("v is not instanceof jQuery");
      return false;
    }

    var LB = this;

    v.each(function () {
      var self = $(this);

      self.on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();

        LB.zoomOut(self);
      })
    })
  }

  Lightbox.prototype.zoomOut = function (j) {
    var template = $("#lightbox").show();
    template.on('click', function (e) {
      var target = e.target || e.srcElement;
      if (target.tagName.toUpperCase() == 'DIV') {
        template.hide();
      }
    });
    template.html('<img src="' + j.attr('src') + '" alt="' + j.attr('alt') + '" style="position:relative;top:50%;transform:translateY(-50%); max-height: 90%; width: auto;"/>');
    $('body', document).append(template);
  }

  Lightbox.bind = function() {
    var imags = $(".format-image .entry-content img");
    if (imags.length === 0) {
      console.debug("can't found images.");
      return false;
    }

    return new Lightbox(imags);
  }

  Lightbox.bind();
})(jQuery);
