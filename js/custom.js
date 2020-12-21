$(document).ready(function() {
  $('#fp-featured-carousel').carousel({
    interval: 10000
  })

  $('#fp-featured-carousel').on('slid.bs.carousel', function() {
    //alert("slid");
  });


});
