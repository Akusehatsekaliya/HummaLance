$(document).ready(function () {
  "use strict";
  $("select").select2();
  $('[data-toggle="tooltip"]').tooltip();
  $(".recent-slider").not('.slick-initialized').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    responsive: [
      { breakpoint: 1099, settings: { slidesToShow: 4 } },
      { breakpoint: 1024, settings: { slidesToShow: 3 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } },
    ],
  });
  $(".freelance-slider").not('.slick-initialized').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    responsive: [
      { breakpoint: 1099, settings: { slidesToShow: 4 } },
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } },
    ],
  });
  $(".service-slider").not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    responsive: [
      { breakpoint: 1099, settings: { slidesToShow: 4 } },
      { breakpoint: 1024, settings: { slidesToShow: 3 } },
      { breakpoint: 600, settings: { slidesToShow: 2 } },
    ],
  });
  $(function () {
    $("#aniimated-thumbnials").lightGallery({ thumbnail: true });
    $(".slider-for").not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      adaptiveHeight: true,
      asNavFor: ".slider-nav",
    });
    $(".recommend").not('.slick-initialized').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      fade: false,
    });
    $(".slider-nav").not('.slick-initialized').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: ".slider-for",
      dots: false,
      arrows: true,
      focusOnSelect: true,
      variableWidth: true,
      responsive: [
        { breakpoint: 1099, settings: { slidesToShow: 4 } },
        { breakpoint: 1024, settings: { slidesToShow: 2 } },
        { breakpoint: 600, settings: { slidesToShow: 1 } },
      ],
    });
  });
  $("#aniimated-thumbnials").lightGallery({ thumbnail: true });
  $(".slider-for").not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    adaptiveHeight: true,
    asNavFor: ".slider-nav",
  });
  $(".recommend").not('.slick-initialized').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    responsive: [{ breakpoint: 767, settings: { slidesToShow: 1 } }],
  });
  $(".view").not('.slick-initialized').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    responsive: [
      { breakpoint: 1099, settings: { slidesToShow: 4 } },
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } },
    ],
  });
  $(".slider-nav").not('.slick-initialized').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: false,
    arrows: true,
    focusOnSelect: true,
    variableWidth: true,
    responsive: [
      { breakpoint: 1099, settings: { slidesToShow: 4 } },
      { breakpoint: 1024, settings: { slidesToShow: 3 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } },
    ],
  });
});