window.UXRotator = function() {
  return {
    el: null,
    displayCount: 4,
    speed: 8000,
    startIndex: 0,

    init: function(el) {
      var _this = this;
      this.el = $(el);
      this.logos = [];
      this.el.find('.clientLogos-logoWrapper').each(function(index, item) {
        $(item).attr('data-id', index + 1);
        _this.logos.push($(item).clone()[0]);
      });
      this.el.empty();
      this.start();
    },

    start: function() {
      var _this = this;
      for(var i = 0; i < this.displayCount; i++) {
        this.el.append($(_this.logos[i]).clone());
      }
      setTimeout(function() {
        _this.next();
      }, this.speed);
    },

    next: function() {
      _this = this;
      this.el.find('.clientLogos-logoWrapper').each(function(index, item) {
        $(item).addClass('hidden').delay(610).promise().done(function() {
          var nextLogo = $(_this.nextLogo(item)).clone().addClass('hidden');
          $(item).replaceWith(nextLogo);
          setTimeout(function() {
            $(_this.el.find('div')[index]).removeClass('hidden');
          }, 10);
        });
      });

      setTimeout(function() {
        _this.next();
      }, this.speed);
    },

    nextLogo(currentLogo) {
      var currentIndex;
      $(this.logos).each(function(index, item) {
        if($(item).data('id') === $(currentLogo).data('id')) {
          currentIndex = index;
        }
      });
      var nextIndex = currentIndex + this.displayCount;
      if(nextIndex > (this.logos.length - 1)) {
        nextIndex = nextIndex - this.logos.length;
      }
      return this.logos[nextIndex];
    }
  }
};

$(document).ready(function() {
  window.UXRotator().init('.clientLogos-rotator');
});
