jQuery(function ($) {
  $(".hamburger").on("click", function () {
    $(".site-header").toggleClass("open");
  });

  $(".mask, .site-header__nav-item a").on("click", function () {
    $(".site-header").removeClass("open");
  });

  $(".ac-menu .label").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("open");
  });

  const fixedHeader = document.querySelector(".fixed-header");
  const siteHeader = document.querySelector(".site-header");

  window.addEventListener("scroll", () => {
    const siteHeaderHeight = siteHeader.offsetHeight;
    const scrollY = window.pageYOffset;

    if (window.innerWidth >= 1025) {
      if (scrollY > siteHeaderHeight) {
        fixedHeader.style.display = "block";
        fixedHeader.style.transform = "translateY(0)";
      } else {
        fixedHeader.style.transform = "translateY(-100%)";
      }
    }
  });

  $(window).on("scroll", function () {
    $(".fadein").each(function () {
      const elemPos = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass("active");
      }
    });
  });

  $('a[href*="#"]').on("click", function (event) {
    const href = $(this).attr("href");
    const url = new URL(href, location.href);
    const hash = url.hash;

    if (url.pathname === location.pathname && hash) {
      const target = $(hash);
      if (target.length) {
        event.preventDefault();
        const position = target.offset().top - 50;
        $("html, body").animate({ scrollTop: position }, 600, "swing");
      }
    }
  });

  const hash = window.location.hash;
  if (hash) {
    const target = $(hash);
    if (target.length) {
      const position = target.offset().top - 100;
      $("html, body").animate({ scrollTop: position }, 600, "swing");
    }
  }

  let pagetop = $(".to-top");
  pagetop.fadeOut();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });

  $(".to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1000, "swing");
    return false;
  });

  if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
    document.body.classList.add("is-safari");
  }
});
