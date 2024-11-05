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

  $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo .titulo .btn-volver").on("click", function(e){
    e.preventDefault();
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-equipo").removeClass("activo");
  });

  $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad .titulo .btn-volver").on("click", function(e){
    e.preventDefault();
    $(".navbar .menu-content .navbar-collapse .navbar-nav-mobile .holder-actualidad").removeClass("activo");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".modulo-35 .desktop .col-left .lista li .btn-link").on("click", function(e){
    e.preventDefault();
    $(".modulo-35 .desktop .col-left .lista li .btn-link").removeClass("activo");
    $(this).addClass("activo");
    let id = $(this).attr("data-id");

    $(".modulo-35 .desktop .col-right .imagenes-holder .imagen-holder").removeClass("show");
    $(".modulo-35 .desktop .col-right .imagenes-holder .imagen-holder#img-"+id).addClass("show");

    $(".modulo-35 .desktop .col-right .infos-holder .info-holder").removeClass("show");
    $(".modulo-35 .desktop .col-right .infos-holder .info-holder#info-"+id).addClass("show");
  });

  $(".modulo-35 .mobile .lista li .btn-link").on("click", function(e){
    e.preventDefault();
    $(".modulo-35 .mobile .layer").addClass("show");

    let id = $(this).attr("data-id");
    $(".modulo-35 .mobile .layer .holder .data").removeClass("show");
    $(".modulo-35 .mobile .layer .holder .data#data-"+id).addClass("show");
  });

  $(".modulo-35 .mobile .layer .titulo .btn-volver").on("click", function(e){
    e.preventDefault();
    $(".modulo-35 .mobile .layer").removeClass("show");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".modulo-30 .lista li .btn-link").on("click", function(e){
    e.preventDefault();
    $(".modulo-30 .lista li .btn-link").removeClass("activo");
    $(this).addClass("activo");
    let id = $(this).attr("data-id");
    $(".modulo-30 .contenidos .contenido").removeClass("show");
    $(".modulo-30 .contenidos .contenido#c-"+id).addClass("show");
  });

  $('.modulo-30 #select').change(function(e) {
    let id = $(this).val();
    $(".modulo-30 .contenidos .contenido").removeClass("show");
    $(".modulo-30 .contenidos .contenido#c-"+id).addClass("show");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".modulo-32 .lista li .btn-link").on("click", function(e){
    e.preventDefault();
    $(".modulo-32 .lista li .btn-link").removeClass("activo");
    $(this).addClass("activo");
    let id = $(this).attr("data-id");
    $(".modulo-32 .contenidos .contenido").removeClass("show");
    $(".modulo-32 .contenidos .contenido#c-"+id).addClass("show");
  });

  $('.modulo-32 #select').change(function(e) {
    let id = $(this).val();
    $(".modulo-32 .contenidos .contenido").removeClass("show");
    $(".modulo-32 .contenidos .contenido#c-"+id).addClass("show");
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  /*$(".slider-publicaciones .slick-slider").on("init", function(event, slick){
    if(slick.slideCount <= 1){
      $('.btns-slider').addClass("disabled");
    }
  });*/

  var slider_publicaciones = $(".slider-publicaciones .slick-slider").slick({
    //accessibility: true,
    //adaptiveHeight: false,
    //appendArrows: $("element"),
    //appendDots: $('.cabecera-slider .sliderParent .appendDots'),
    arrows: false,
    //asNavFor: null,
    //prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
    //nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
    autoplay: false,
    autoplaySpeed: 3000,
    //centerMode: true,
    //centerPadding: '0px',
    cssEase: 'ease-in-out',
    /*customPaging: function(slider, i) {
        return $('<button type="button" />').text(i + 1);
    },*/
    dots: false,
    //dotsClass: 'slick-dots',
    draggable: true,
    easing: 'easing',
    //edgeFriction: 0.35,
    //fade: true,
    //focusOnSelect: true,
    //focusOnChange: true,
    infinite: true,
    //initialSlide: 0,
    lazyLoad: 'ondemand',
    //mobileFirst: false,
    //pauseOnHover: true,
    //pauseOnFocus: true,
    //pauseOnDotsHover: false,
    //respondTo: 'window',
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
    //rows: 1,
    //rtl: false,
    //slide: '',
    //slidesPerRow: 1,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 800,
    //swipe: true,
    //swipeToSlide: false,
    //touchMove: true,
    //touchThreshold: 5,
    //useCSS: true,
    //useTransform: true,
    //variableWidth: false,
    //vertical: false,
    //verticalSwiping: false,
    waitForAnimate: true,
    //zIndex: 1000,
    //animating: true,
    dragging: true,
    //autoPlayTimer: null,
    //currentDirection: 0,
    //currentLeft: null,
    //currentSlide: 0,
    //direction: 1,
    //$dots: null,
    //listWidth: null,
    //listHeight: null,
    //loadIndex: 0,
    //$prevArrow: null,
    //$nextArrow: null,
    //scrolling: false,
    //slideCount: null,
    //slideWidth: null,
    //$slideTrack: null,
    //$slides: null,
    //sliding: false,
    //slideOffset: 0,
    //swipeLeft: null,
    //swiping: false,
    //$list: null,
    //touchObject: {},
    //transformsEnabled: false,
    //unslicked: true
  });

  $('.btns-slider .btn-prev').on("click", function(e){
    e.preventDefault();
    //slider_publicaciones.slick('slickPrev');

    var id = $(this).parent().attr("id");
    var id_ = id.split("_");

    $("#slider_"+id_[2]+".slider-publicaciones .slick-slider").slick('slickPrev');
  });

  $('.btns-slider .btn-next').on("click", function(e){
    e.preventDefault();
    //slider_publicaciones.slick('slickNext');

    var id = $(this).parent().attr("id");
    var id_ = id.split("_");

    $("#slider_"+id_[2]+".slider-publicaciones .slick-slider").slick('slickNext');
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  /*$(".slider-premios .slick-slider").on("init", function(event, slick){
    if(slick.slideCount <= 1){
      $('.btns-slider').addClass("disabled");
    }
  });*/

  var slider_premios = $(".slider-premios .slick-slider").slick({
    //accessibility: true,
    //adaptiveHeight: false,
    //appendArrows: $("element"),
    //appendDots: $('.cabecera-slider .sliderParent .appendDots'),
    arrows: false,
    //asNavFor: null,
    //prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
    //nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
    autoplay: false,
    autoplaySpeed: 3000,
    //centerMode: true,
    //centerPadding: '0px',
    cssEase: 'ease-in-out',
    /*customPaging: function(slider, i) {
        return $('<button type="button" />').text(i + 1);
    },*/
    dots: false,
    //dotsClass: 'slick-dots',
    draggable: true,
    easing: 'easing',
    //edgeFriction: 0.35,
    //fade: true,
    //focusOnSelect: true,
    //focusOnChange: true,
    infinite: true,
    //initialSlide: 0,
    lazyLoad: 'ondemand',
    //mobileFirst: false,
    //pauseOnHover: true,
    //pauseOnFocus: true,
    //pauseOnDotsHover: false,
    //respondTo: 'window',
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
    //rows: 1,
    //rtl: false,
    //slide: '',
    //slidesPerRow: 1,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 800,
    //swipe: true,
    //swipeToSlide: false,
    //touchMove: true,
    //touchThreshold: 5,
    //useCSS: true,
    //useTransform: true,
    //variableWidth: false,
    //vertical: false,
    //verticalSwiping: false,
    waitForAnimate: true,
    //zIndex: 1000,
    //animating: true,
    dragging: true,
    //autoPlayTimer: null,
    //currentDirection: 0,
    //currentLeft: null,
    //currentSlide: 0,
    //direction: 1,
    //$dots: null,
    //listWidth: null,
    //listHeight: null,
    //loadIndex: 0,
    //$prevArrow: null,
    //$nextArrow: null,
    //scrolling: false,
    //slideCount: null,
    //slideWidth: null,
    //$slideTrack: null,
    //$slides: null,
    //sliding: false,
    //slideOffset: 0,
    //swipeLeft: null,
    //swiping: false,
    //$list: null,
    //touchObject: {},
    //transformsEnabled: false,
    //unslicked: true
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
    //accessibility: true,
    //adaptiveHeight: false,
    //appendArrows: $("element"),
    //appendDots: $('.cabecera-slider .sliderParent .appendDots'),
    arrows: false,
    //asNavFor: null,
    //prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
    //nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
    autoplay: true,
    autoplaySpeed: 3000,
    //centerMode: true,
    //centerPadding: '0px',
    cssEase: 'ease-in-out',
    /*customPaging: function(slider, i) {
        return $('<button type="button" />').text(i + 1);
    },*/
    dots: false,
    //dotsClass: 'slick-dots',
    draggable: true,
    easing: 'easing',
    //edgeFriction: 0.35,
    //fade: true,
    //focusOnSelect: true,
    //focusOnChange: true,
    infinite: true,
    //initialSlide: 0,
    lazyLoad: 'ondemand',
    //mobileFirst: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    //pauseOnDotsHover: false,
    //respondTo: 'window',
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
    //rows: 1,
    //rtl: false,
    //slide: '',
    //slidesPerRow: 1,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 800,
    //swipe: true,
    //swipeToSlide: false,
    //touchMove: true,
    //touchThreshold: 5,
    //useCSS: true,
    //useTransform: true,
    //variableWidth: false,
    //vertical: false,
    //verticalSwiping: false,
    waitForAnimate: false,
    //zIndex: 1000,
    //animating: true,
    dragging: true,
    //autoPlayTimer: null,
    //currentDirection: 0,
    //currentLeft: null,
    //currentSlide: 0,
    //direction: 1,
    //$dots: null,
    //listWidth: null,
    //listHeight: null,
    //loadIndex: 0,
    //$prevArrow: null,
    //$nextArrow: null,
    //scrolling: false,
    //slideCount: null,
    //slideWidth: null,
    //$slideTrack: null,
    //$slides: null,
    //sliding: false,
    //slideOffset: 0,
    //swipeLeft: null,
    //swiping: false,
    //$list: null,
    //touchObject: {},
    //transformsEnabled: false,
    //unslicked: true
  });

  /* ---------------------------------------------------------------------------------------------------------*/

  $(".slider-testimonios .slick-slider").on("init", function(event, slick){
    if(slick.slideCount <= 1){
      $('.slider-publicaciones .btns-slider').addClass("disabled");
    }
  });

  var slider_testimonios = $(".slider-testimonios .slick-slider").slick({
    //accessibility: true,
    //adaptiveHeight: false,
    //appendArrows: $("element"),
    //appendDots: $('.cabecera-slider .sliderParent .appendDots'),
    arrows: false,
    //asNavFor: null,
    //prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
    //nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
    autoplay: false,
    autoplaySpeed: 3000,
    //centerMode: true,
    //centerPadding: '0px',
    cssEase: 'ease-in-out',
    /*customPaging: function(slider, i) {
        return $('<button type="button" />').text(i + 1);
    },*/
    dots: false,
    //dotsClass: 'slick-dots',
    draggable: true,
    easing: 'easing',
    //edgeFriction: 0.35,
    //fade: true,
    //focusOnSelect: true,
    //focusOnChange: true,
    infinite: true,
    //initialSlide: 0,
    lazyLoad: 'ondemand',
    //mobileFirst: false,
    //pauseOnHover: true,
    //pauseOnFocus: true,
    //pauseOnDotsHover: false,
    //respondTo: 'window',
    /*responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000
      }
    }],*/
    //rows: 1,
    //rtl: false,
    //slide: '',
    //slidesPerRow: 1,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 800,
    //swipe: true,
    //swipeToSlide: false,
    //touchMove: true,
    //touchThreshold: 5,
    //useCSS: true,
    //useTransform: true,
    //variableWidth: false,
    //vertical: false,
    //verticalSwiping: false,
    waitForAnimate: true,
    //zIndex: 1000,
    //animating: true,
    dragging: true,
    //autoPlayTimer: null,
    //currentDirection: 0,
    //currentLeft: null,
    //currentSlide: 0,
    //direction: 1,
    //$dots: null,
    //listWidth: null,
    //listHeight: null,
    //loadIndex: 0,
    //$prevArrow: null,
    //$nextArrow: null,
    //scrolling: false,
    //slideCount: null,
    //slideWidth: null,
    //$slideTrack: null,
    //$slides: null,
    //sliding: false,
    //slideOffset: 0,
    //swipeLeft: null,
    //swiping: false,
    //$list: null,
    //touchObject: {},
    //transformsEnabled: false,
    //unslicked: true
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

  /*$(window).resize(function() {
    $(".navbar .menu-content .navbar-collapse").removeClass("show");
    $(".navbar .menu-content .navbar-toggler").attr("aria-expanded", "false");
    $(".navbar .menu-content .navbar-toggler").removeClass("collapsed").addClass("collapsed");
  });*/

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
      //$('#fixed-' + activeColor).addClass(activeColor + '-active');
    } else {
      isInViewport = 0;
      //$('#fixed-' + activeColor).removeClass(activeColor + '-active');
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



  /*if (jQuery(this).scrollTop() >= distance) {
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
      jQuery('.navbar').css({ top: -(jQuery(".navbar").outerHeight())+"px" });
    } else {
      jQuery('.navbar').css({ top: 0 });
    }
    lastScrollTop = st;
  } else {
  }*/
}
