
jQuery( document ).ready(function(  ) {
  jQuery(".product_page_bg .all_models_item").slick({
      arrows: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
          },
        },
      ],
    });
  });

