jQuery(document).ready(function($) {

  var owl = $('.slider-image .owl-carousel');

  owl.owlCarousel({
    items: 1,
    margin: 0,
    nav: true,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: true,
    dots: false,
    navText: [
      '<span class="dashicons dashicons-arrow-left-alt"></span>',
      '<span class="dashicons dashicons-arrow-right-alt"></span>'
    ],
    smartSpeed: 900
  });

  function updateCounter(event) {

    var carousel = event.relatedTarget;

    // real slide index (correct even in loop mode)
    var index = carousel.relative(carousel.current()) + 1;

    // total slides
    var count = carousel.items().length;

    // format numbers: 01, 02, 03...
    var current = index.toString().padStart(2, '0');
    var total = count.toString().padStart(2, '0');

    $('#active-count').text(current + '/' + total);
  }

  // On load
  owl.on('initialized.owl.carousel', updateCounter);

  // On change
  owl.on('changed.owl.carousel', updateCounter);

});
