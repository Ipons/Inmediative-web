$(document).on('ready', function() {
	  $(".galeria").slick({

  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 8,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 460,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
  ]
});
	});