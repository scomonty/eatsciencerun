$(window).load(function(){


setTimeout(function () {
    $('.fir').textillate();
}, 1000);
setTimeout(function () {
    $('.sec').textillate();
}, 1600);
setTimeout(function () {
    $('.thir').textillate();
}, 2700);

        (function() {
      var segmenter = new Segmenter(document.querySelector('.segmenter'), {
          onReady: function() {
            setTimeout(function () {
              segmenter.animate();
            }, 3600);
          }
        });
    })();

   });