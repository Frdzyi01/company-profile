let splideHeader = new Splide('.splide-header', {
    pagination: false,
    arrows: false,
    autoplay: true,
    type: 'fade',
    rewind: true,
    interval: 3000,
    lazyLoad: 'nearby',
  }).mount();

  let splidePortfolio = new Splide('.splide-portfolio', {
    pagination: true,
    arrows: true,
    autoplay: true,
    type: 'fade',
    rewind: true,
    interval: 3000,
    lazyLoad: 'nearby',
    pauseOnHover: false,
  }).mount();

//   splideHeader.mount();
