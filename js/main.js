$(function () {
    var navbar = $(".header-inner");
    // var top_nav = $(".top_nav");
    var logo1 = $(".logo1");
    var logo2 = $(".logo2");
    var togel1 = $(".toggel_btn1");
    var togel2 = $(".toggel_btn2");
    $(window).scroll(function () {
      if ($(window).scrollTop() <= 40) {
        // top_nav.css("display", "block");
        togel1.css("display", "block");
        togel2.css("display", "none");
        logo1.css("display", "block");
        logo2.css("display", "none");
        navbar.removeClass("navbar-scroll");
      } else {
        // top_nav.css("display", "none");
        togel1.css("display", "none");
        togel2.css("display", "block");
        logo1.css("display", "none");
        logo2.css("display", "block");
        navbar.addClass("navbar-scroll");
      }
    });
  });


  //   --------------------------------------------current-page---------------

const currentlink = location.href;
const menuitems = document.getElementsByClassName("nav-link");
// console.log(menuitems);
for (let i = 0; i < menuitems.length; i++) {
  if (menuitems[i].href === currentlink) {
    menuitems[i].className = "current";
  }
}


  //=== company logo Carousel ===//
  $(".com_logos").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    margin: 10,
    nav: false,
    dots:false,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  //=== company logo Carousel ===//
  $(".com_logos2").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    margin: 10,
    nav: false,
    dots:false,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });