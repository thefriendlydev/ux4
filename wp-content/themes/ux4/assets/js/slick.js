$(document).ready(function() {
  $('.testimonials-slick').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 8000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          centerMode: true,
          centerPadding: '100px'
        }
      },
      {
        breakpoint: 800,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});
