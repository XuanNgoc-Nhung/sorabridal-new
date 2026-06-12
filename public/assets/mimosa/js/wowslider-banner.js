/**
 * WOW Slider inspired banner — random transition effects.
 * Reference: https://wowslider.com/
 */
(function ($) {
  'use strict';

  var EFFECTS = ['fade', 'slide-left', 'slide-right', 'zoom-in', 'zoom-out', 'blur'];

  function normalizeIndex(index, total) {
    return ((index % total) + total) % total;
  }

  function pickRandomEffect(lastEffect) {
    var pool = lastEffect
      ? EFFECTS.filter(function (effect) { return effect !== lastEffect; })
      : EFFECTS.slice();
    return pool[Math.floor(Math.random() * pool.length)];
  }

  $.fn.wowSliderBanner = function (options) {
    options = $.extend({
      duration: 1200,
      delay: 5000,
      autoPlay: true,
      stopOnHover: true,
      controls: true,
      bullets: true,
      caption: false,
      loop: true,
    }, options);

    return this.each(function () {
      var $container = $(this);
      if ($container.data('wowslider-banner-init')) {
        return;
      }
      $container.data('wowslider-banner-init', true);

      var $slides = $container.find('.ws_images ul > li');
      var total = $slides.length;

      if (!total) {
        return;
      }

      var current = 0;
      var lastEffect = null;
      var timer = null;
      var isPaused = false;
      var isAnimating = false;

      $slides.removeClass('is-active is-leaving is-entering').eq(0).addClass('is-active');

      if (options.controls) {
        var $prev = $('<a href="#" class="ws_prev" aria-label="Slide trước"></a>');
        var $next = $('<a href="#" class="ws_next" aria-label="Slide tiếp"></a>');
        $container.append($prev, $next);

        $prev.on('click', function (event) {
          event.preventDefault();
          goTo(current - 1, true);
        });

        $next.on('click', function (event) {
          event.preventDefault();
          goTo(current + 1, true);
        });
      }

      var $bullets = $container.find('.ws_bullets a');
      var $bulframe = $('<div class="ws_bulframe" aria-hidden="true"><img src="" alt=""><span></span></div>');
      $container.find('.ws_bullets > div').append($bulframe);

      function updateBullets(index) {
        if (!options.bullets) {
          return;
        }
        $bullets.removeClass('ws_selbull').eq(index).addClass('ws_selbull');
      }

      function goTo(index, manual) {
        var next = normalizeIndex(index, total);

        if (isAnimating) {
          return;
        }

        if (next === current) {
          if (manual) {
            restartAutoPlay();
          }
          return;
        }

        var effect = pickRandomEffect(lastEffect);
        lastEffect = effect;
        var from = current;

        isAnimating = true;
        $container.attr('data-effect', effect);

        var $from = $slides.eq(from);
        var $to = $slides.eq(next);

        $slides.removeClass('is-leaving is-entering');
        $from.addClass('is-leaving');
        $to.addClass('is-entering');

        window.requestAnimationFrame(function () {
          $from.removeClass('is-active');
          $to.addClass('is-active');
        });

        window.setTimeout(function () {
          $slides.removeClass('is-leaving is-entering');
          $to.addClass('is-active');
          current = next;
          isAnimating = false;
          updateBullets(current);

          if (manual) {
            restartAutoPlay();
          }
        }, options.duration);
      }

      function stopAutoPlay() {
        if (timer) {
          clearTimeout(timer);
          timer = null;
        }
      }

      function restartAutoPlay() {
        stopAutoPlay();
        if (!options.autoPlay || isPaused) {
          return;
        }
        timer = window.setTimeout(function () {
          goTo(current + 1);
          restartAutoPlay();
        }, options.delay);
      }

      if (options.bullets) {
        $bullets.each(function (index) {
          var $bullet = $(this);

          $bullet.on('click', function (event) {
            event.preventDefault();
            goTo(index, true);
          });

          $bullet.on('mouseenter focus', function () {
            var thumb = $bullet.find('img').attr('src');
            if (!thumb) {
              return;
            }
            $bulframe.find('img').attr('src', thumb).attr('alt', '');
            $bulframe.addClass('is-visible');
          });
        });

        $container.find('.ws_bullets > div').on('mouseleave', function () {
          $bulframe.removeClass('is-visible');
        });
      }

      if (options.stopOnHover) {
        $container.on('mouseenter', function () {
          isPaused = true;
          stopAutoPlay();
        });
        $container.on('mouseleave', function () {
          isPaused = false;
          restartAutoPlay();
        });
      }

      var touchStartX = 0;
      $container.on('touchstart', function (event) {
        touchStartX = event.originalEvent.touches[0].clientX;
      });
      $container.on('touchend', function (event) {
        var touchEndX = event.originalEvent.changedTouches[0].clientX;
        var delta = touchEndX - touchStartX;
        if (Math.abs(delta) < 40) {
          return;
        }
        if (delta < 0) {
          goTo(current + 1, true);
        } else {
          goTo(current - 1, true);
        }
      });

      updateBullets(0);
      restartAutoPlay();
    });
  };

  $(function () {
    var $banner = $('#wowslider-container.wowslider-banner');
    if ($banner.length) {
      $banner.wowSliderBanner({
        duration: 1200,
        delay: 5000,
        autoPlay: true,
        stopOnHover: true,
        controls: true,
        bullets: true,
        caption: false,
      });
    }
  });
})(jQuery);
