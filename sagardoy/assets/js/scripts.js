jQuery(document).ready(function(){
  $(".navbar .navbar-nav .col-right .btns-link .btn-link_:not(.btn-equipo)").mouseenter(function(e){
    $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-equipo").removeClass("hover");
  });

  $(".navbar .navbar-nav .col-right .btns-link .btn-link_:not(.btn-actualidad)").mouseenter(function(e){
    $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-actualidad").removeClass("hover");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-equipo").mouseenter(function(e){
    if(!$(this).hasClass("hover")){
      $(this).addClass("hover");
    }
  });

  $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-equipo .submenu.equipo").mouseleave(function(e){
    $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-equipo").removeClass("hover");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-actualidad").mouseenter(function(e){
    if(!$(this).hasClass("hover")){
      $(this).addClass("hover");
    }
  });

  $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-actualidad .submenu.actualidad").mouseleave(function(e){
    $(".navbar .navbar-nav .col-right .btns-link .btn-link_.btn-actualidad").removeClass("hover");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .btn-link.btn-equipo").on("click", function(e){
    e.preventDefault();

    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo").addClass("activo");
  });

  $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .btn-link.btn-actualidad").on("click", function(e){
    e.preventDefault();

    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad").addClass("activo");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo .titulo .btn-volver").on("click", function(e){
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo").removeClass("activo");
  });

  $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad .titulo .btn-volver").on("click", function(e){
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad").removeClass("activo");
  });

  /* ---------------------------------------------------------------------------------------------------------*/


  var slider_publicaciones = $(".slider-publicaciones .slick-slider").slick({
    arrows: false,
    autoplay: false,
    autoplaySpeed: 3000,
    cssEase: 'ease-in-out',
    dots: false,
    draggable: true,
    easing: 'easing',
    infinite: true,
    lazyLoad: 'ondemand',
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 800,
    waitForAnimate: true,
    dragging: true,
  });

  $('.btns-slider .btn-prev').on("click", function(e){
    e.preventDefault();

    var id = $(this).parent().attr("id");
    var id_ = id.split("_");

    $("#slider_"+id_[2]+".slider-publicaciones .slick-slider").slick('slickPrev');
  });

  $('.btns-slider .btn-next').on("click", function(e){
    e.preventDefault();

    var id = $(this).parent().attr("id");
    var id_ = id.split("_");

    $("#slider_"+id_[2]+".slider-publicaciones .slick-slider").slick('slickNext');
  });

  /* ---------------------------------------------------------------------------------------------------------*/


  var slider_premios = $(".slider-premios .slick-slider").slick({

    arrows: false,
    autoplay: false,
    autoplaySpeed: 3000,
    cssEase: 'ease-in-out',
    dots: false,
    draggable: true,
    easing: 'easing',
    infinite: true,
    lazyLoad: 'ondemand',
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 800,
    waitForAnimate: true,
    dragging: true,
  });

  $('.btns-slider .btn-prev').on("click", function(e){
    e.preventDefault();
    var id = $(this).parent().attr("id");
    var id_ = id.split("_");
    $("#slider_"+id_[2]+".slider-premios .slick-slider").slick('slickPrev');
  });

  $('.btns-slider .btn-next').on("click", function(e){
    e.preventDefault();
    var id = $(this).parent().attr("id");
    var id_ = id.split("_");
    $("#slider_"+id_[2]+".slider-premios .slick-slider").slick('slickNext');
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  var slider_logos = $(".slider-logos .slick-slider").slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    cssEase: 'ease-in-out',
    dots: false,
    draggable: true,
    easing: 'easing',
    infinite: true,
    lazyLoad: 'ondemand',
    pauseOnHover: false,
    pauseOnFocus: false,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
      }
    },{
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
      }
    }],
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 800,
    waitForAnimate: false,
    dragging: true,
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".slider-testimonios .slick-slider").on("init", function(event, slick){
    if(slick.slideCount <= 1){
      $('.slider-publicaciones .btns-slider').addClass("disabled");
    }
  });

  var slider_testimonios = $(".slider-testimonios .slick-slider").slick({
    arrows: false,
    autoplay: false,
    autoplaySpeed: 3000,
    cssEase: 'ease-in-out',
    dots: false,
    draggable: true,
    easing: 'easing',
    infinite: true,
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 800,
    waitForAnimate: true,
    dragging: true,
  });

  $('.btns-slider-testimonios .btn-prev').on("click", function(e){
    e.preventDefault();
    slider_testimonios.slick('slickPrev');
  });

  $('.btns-slider-testimonios .btn-next').on("click", function(e){
    e.preventDefault();
    slider_testimonios.slick('slickNext');
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $('.navbar .menu-content .navbar-toggler').on("click", function(e){
    e.preventDefault();
    $('body').toggleClass("open-menu");
    $('html').toggleClass("no-scroll");

    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo").removeClass("activo");
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad").removeClass("activo");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  jQuery(window).scroll(function() {
    stateScrollTop();
  });

  stateScrollTop();

  /* ---------------------------------------------------------------------------------------------------------*/


  window.addEventListener('resize', () => {
    $(".navbar .menu-content .navbar-collapse").removeClass("show");
    $(".navbar .menu-content .navbar-toggler").attr("aria-expanded", "false");
    $(".navbar .menu-content .navbar-toggler").removeClass("collapsed").addClass("collapsed");
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo").removeClass("activo");
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad").removeClass("activo");
    $('html').removeClass("no-scroll");
  });

});

/* ------------------------------------------------------------------------------------------ */

function countUp(){
  setTimeout(() => {
    $('.counter').each(function() {
      var $this = $(this);
      var countTo = $this.attr('data-count');

      $({ countNum: $this.text()}).animate({
        countNum: countTo
      }, {
        duration: 1000,
        easing:'linear',
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum);
        }
      });
    });
  }, 200);
}

$.fn.isInViewport = function() {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();
  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();
  return elementBottom > viewportTop && elementTop < viewportBottom;
};

let isInViewport = 0;

$(window).on('resize scroll', function() {
  $('.counter').each(function() {
    //var activeColor = $(this).attr('id');
    if ($(this).isInViewport()) {
      if(isInViewport == 0){
        countUp();
      }
      isInViewport = 1;
    } else {
      isInViewport = 0;
    }
  });
});

$(window).resize();

/* ------------------------------------------------------------------------------------------ */

var lastScrollTop = 0;

function stateScrollTop(){
  var distance = jQuery('.navbar').outerHeight();

  if($(".navbar .menu-content .navbar-collapse").hasClass("show")){
    $(".navbar .menu-content .navbar-collapse").removeClass("show");
    $(".navbar .menu-content .navbar-toggler").attr("aria-expanded", "false");
    $(".navbar .menu-content .navbar-toggler").removeClass("collapsed").addClass("collapsed");
  }

  if(jQuery(".cabecera").length){
    if (jQuery(this).scrollTop() >= (jQuery(".cabecera").outerHeight()-jQuery(".navbar").outerHeight())) {
      jQuery('.navbar').addClass("scrolling");
    } else {
      jQuery('.navbar').removeClass("scrolling");
    }
  } else {
    if (jQuery(this).scrollTop() > 0) {
      jQuery('.navbar').addClass("scrolling");
    } else {
      jQuery('.navbar').removeClass("scrolling");
    }
  }

}
