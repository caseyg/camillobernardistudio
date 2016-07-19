// Place any jQuery/helper plugins in here.

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

$(window).smartresize(function(){
  $('.container').css('padding-top', $('.header--page').outerHeight()+30);
});

(function($) {
    $.fn.onPageLoad = function() {
      $('.container').css('padding-top', $('.header--page').outerHeight()+30);

      // init controller
      var controller = new ScrollMagic.Controller();

      $('.work__header').each(function(){
        var scene = new $.ScrollMagic.Scene({
                triggerElement: $(this).parent(),
                triggerHook: "onCenter",
                duration: $(this).parent().height()/4,
                offset: 0
            })
            .setPin(this)
            .setClassToggle(this, 'work__header--visible')
            .addTo(controller);
      });

    }
}(jQuery));

$(document).ready(function() {
  $('body').onPageLoad();
});


// SmoothState
$(function(){
  'use strict';
  var options = {
      debug: true,
      prefetch: true,
      onStart: {
        duration: 400, // Duration of our animation
        render: function ($container) {
          // Add your CSS animation reversing class
          $container.addClass('is-exiting');
          // Restart your animation
          smoothState.restartCSSAnimations();
        }
      },
      onReady: {
        duration: 0,
        render: function ($container, $newContent) {
          // Remove your CSS animation reversing class
          $container.removeClass('is-exiting');
          // Inject the new content
          $container.html($newContent);
        }
      },
      onAfter: function ($container) {
        $container.onPageLoad();
      }
    },
    smoothState = $('#smoothstate').smoothState(options).data('smoothState');
});
