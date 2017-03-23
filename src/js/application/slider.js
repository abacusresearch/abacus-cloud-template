$(window).load(function() {
  $('.act-slider.example-1').flickity({
    arrowShape: { 
      x0: 30,
      x1: 55, y1: 25,
      x2: 60, y2: 20,
      x3: 40
    }
  });
  $('.act-slider.example-2').flickity({
    arrowShape: { 
      x0: 30,
      x1: 55, y1: 25,
      x2: 60, y2: 20,
      x3: 40
    },
    prevNextButtons: false,
    pageDots: false,
    adaptiveHeight: true,
    autoPlay: 2000
  });
});