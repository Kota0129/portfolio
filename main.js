jQuery(function ($) {
  // ==========================
  // 共通ユーティリティ
  // ==========================
  var $body = $(document.body);
  var $siteHeader = $(".site-header");
  var $hamburger  = $(".hamburger");
  var $mask       = $(".mask");
  var $nav        = $(".site-header__nav");
	
// ========================
// Loading処理（ゲージ＋ロゴ表示）
// ========================
function loadingStop() {
  const loadingWrap = document.getElementById('loadingWrap');
  loadingWrap.classList.add('loadingNone'); 
  setTimeout(() => {
    loadingWrap.style.display = 'none';
  }, 1000);
}

window.addEventListener('load', function () {
  const isFirstLoad = sessionStorage.getItem('isFirstLoad');
  const loadingWrap = document.getElementById('loadingWrap');
  const progressBar = document.querySelector('.loading__bar-progress');
  const percent = document.querySelector('.loading__percent');
  const logo = document.querySelector('.loading__logo');

  if (!isFirstLoad) {
    loadingWrap.style.display = 'flex';
    let progress = 0;

    const interval = setInterval(() => {
      progress += 2;
      if (progress > 100) progress = 100;

      progressBar.style.width = progress + '%';
      percent.textContent = progress + '%';

      if (progress === 100) {
        clearInterval(interval);

        setTimeout(() => {
          document.querySelector('.loading__bar').style.opacity = 0;
          percent.style.opacity = 0;
        }, 300);

        setTimeout(() => {
          logo.classList.add('show');
        }, 800);

        setTimeout(() => {
          logo.classList.remove('show');
          logo.classList.add('hide');
        }, 2300);

        setTimeout(() => {
          loadingStop();
        }, 3200);
      }
    }, 20);

    sessionStorage.setItem('isFirstLoad', 'true');

  } else {
    loadingWrap.style.display = 'none';
  }
});
	window.addEventListener('load', function() {
  document.body.classList.add('loaded');
});

  // ==========================
// ヒーロー高さ調整
// ==========================
var $hero = $(".hero");
var _heroTicking = false;

function setHeroHeight() {
  if (!$hero.length || !$siteHeader.length) return;
  var vh = window.innerHeight;               
  var hh = $siteHeader.outerHeight() || 0;     
  var target = Math.max(0, vh - hh);           
  $hero.css({
    minHeight: target + "px",
    height:    target + "px"                 
  });
}

function requestSetHeroHeight() {
  if (_heroTicking) return;
  _heroTicking = true;
  requestAnimationFrame(function(){
    setHeroHeight();
    _heroTicking = false;
  });
}

setHeroHeight();
$(window).on("resize orientationchange", requestSetHeroHeight);
$(window).on("load", requestSetHeroHeight);
if (document.fonts && document.fonts.ready) {
  document.fonts.ready.then(requestSetHeroHeight).catch(function(){});
}

  // 初期ARIA
  $mask.attr("aria-hidden", "true");
  $hamburger.attr({ "aria-expanded": "false" });
  if ($nav.length) {
    if (!$nav.attr("id")) $nav.attr("id", "site-global-nav");
    $hamburger.attr("aria-controls", $nav.attr("id"));
    $nav.attr("aria-label", "グローバルナビゲーション");
  }

  // フォーカス管理
  var lastFocusedEl = null;
  function saveFocus(){ lastFocusedEl = document.activeElement; }
  function restoreFocus(){
    if (lastFocusedEl && document.body.contains(lastFocusedEl)) lastFocusedEl.focus();
  }
  function focusFirstInNav(){
    if (!$nav.length) return;
    var $focusables = $nav
      .find('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])')
      .filter(":visible");
    if ($focusables.length) $focusables.first().focus();
  }
  function lockScroll(lock){
    document.documentElement.style.overflow = lock ? "hidden" : "";
    document.body.style.overflow = lock ? "hidden" : "";
  }

  // メニュー開閉を関数化（あちこちから安全に呼べるように）
  function openMenu(){
    saveFocus();
    $siteHeader.addClass("open");
    $hamburger.attr({"aria-expanded":"true","aria-label":"メニューを閉じる"});
    $mask.attr("aria-hidden","false");
    lockScroll(true);
    focusFirstInNav();
    bindHeaderKeys();
  }
  function closeMenu(){
    $siteHeader.removeClass("open");
    $hamburger.attr({"aria-expanded":"false","aria-label":"メニューを開く"});
    $mask.attr("aria-hidden","true");
    lockScroll(false);
    restoreFocus();
    unbindHeaderKeys();
  }

  function bindHeaderKeys(){
    $(document).on("keydown.accessibility", function(e){
      // Escで閉じる
      if (e.key === "Escape" && $siteHeader.hasClass("open")) {
        e.preventDefault();
        closeMenu();
      }
      // フォーカストラップ
      if (e.key === "Tab" && $siteHeader.hasClass("open") && $nav.length){
        var $f = $nav.find('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])').filter(":visible");
        if (!$f.length) return;
        var first = $f.get(0), last = $f.get($f.length-1);
        if (e.shiftKey && document.activeElement === first){ e.preventDefault(); $(last).focus(); }
        else if (!e.shiftKey && document.activeElement === last){ e.preventDefault(); $(first).focus(); }
      }
    });
  }
  function unbindHeaderKeys(){ $(document).off("keydown.accessibility"); }

  // ==========================
  // ハンバーガー
  // ==========================
  $hamburger.on("click", function () {
    $siteHeader.hasClass("open") ? closeMenu() : openMenu();
  });
  $mask.on("click", closeMenu);
  $(".site-header__nav-item a").on("click", closeMenu);

  // ==========================
  // アコーディオン（FAQ）
  // ==========================
  $(".ac-menu .label").each(function (i) {
    var $label = $(this);
    var $panel = $label.next(".answer");
    if (!$panel.length) return;
    var pid = $panel.attr("id") || ("faq-answer-" + (i + 1));
    $panel.attr({ id: pid, role: "region", "aria-hidden": "true" });
    $label.attr({ role: "button", tabindex: "0", "aria-controls": pid, "aria-expanded": "false" });
  });

  $(".ac-menu .label").on("click", function () {
    var $label = $(this);
    var $panel = $label.next(".answer");
    $panel.stop(true,true).slideToggle(200);
    var expanded = $label.attr("aria-expanded") === "true";
    $label.toggleClass("open").attr("aria-expanded", String(!expanded));
    $panel.attr("aria-hidden", String(expanded));
  }).on("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") { e.preventDefault(); $(this).trigger("click"); }
  });

// ==========================
// 固定ヘッダー表示（ARIAでトグル）
// ==========================
var fixedHeader = document.querySelector(".fixed-header");

function updateFixedHeader(){
  if (!fixedHeader || !$siteHeader.length) return;

  var enable = true;
  var headerH = $siteHeader.outerHeight() || 0;
  var scrollY = window.scrollY != null ? window.scrollY
               : document.documentElement.scrollTop || document.body.scrollTop || 0;

  var show = enable && scrollY > headerH;

  fixedHeader.setAttribute("aria-hidden", show ? "false" : "true");
}

var _resizeTimer;
window.addEventListener("scroll", updateFixedHeader, { passive: true });
window.addEventListener("resize", function () {
  clearTimeout(_resizeTimer);
  _resizeTimer = setTimeout(updateFixedHeader, 100);
});
updateFixedHeader(); 

  // ==========================
  // フェードイン
  // ==========================
  function runFadeIn(){
    var winH = $(window).height(), scr = $(window).scrollTop();
    $(".fadein").each(function () {
      var elemPos = $(this).offset().top;
      if (scr > elemPos - winH + 100) $(this).addClass("active");
    });
  }
  $(window).on("scroll", runFadeIn);
  runFadeIn();
	
	// ==========================
// 制作実績：slick スライダー
// ==========================
(function initPortfolioSlider(){
  var $g = $('.portfolio__slider');
  if (!$g.length) return;

  if (!$.fn.slick) {
    console.warn('[portfolio] slickが読み込まれていません');
    return;
  }

  $g.css('display', 'block');

  $g.on('init', function(){
  }).slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,          
    dots: true,
    arrows: true,
    speed: 500,
    cssEase: 'ease-out',
    adaptiveHeight: false,
    lazyLoad: 'ondemand',
    autoplay: true,            
    autoplaySpeed: 2000,       
    pauseOnHover: true,       
    pauseOnFocus: true,        
    prevArrow: '<button type="button" class="slick-prev" aria-label="前へ"></button>',
    nextArrow: '<button type="button" class="slick-next" aria-label="次へ"></button>'
  });
})();

  // ==========================
  // スムーススクロール
  // ==========================
  var prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  $('a[href*="#"]').on("click", function (event) {
    var href = $(this).attr("href");
    if (!href) return;
    var url = new URL(href, location.href);
    var hash = url.hash;
    if (url.pathname === location.pathname && hash) {
      var $target = $(hash);
      if ($target.length) {
        event.preventDefault();
        var pos = $target.offset().top - 50;
        prefersReduced ? $(window).scrollTop(pos) : $("html, body").animate({ scrollTop: pos }, 600, "swing");
      }
    }
  });
  if (window.location.hash){
    var $t = $(window.location.hash);
    if ($t.length){
      var pos = $t.offset().top - 100;
      prefersReduced ? $(window).scrollTop(pos) : $("html, body").animate({ scrollTop: pos }, 600, "swing");
    }
  }

  // ==========================
  // ページトップ
  // ==========================
  var $toTop = $(".to-top");
  $(".to-top__icon").attr({ "aria-hidden": "true", focusable: "false" });
  $toTop.hide();
  $(window).on("scroll", function(){
    $(this).scrollTop() > 700 ? $toTop.fadeIn() : $toTop.fadeOut();
  });
  $toTop.on("click", function(e){
    e.preventDefault();
    prefersReduced ? $(window).scrollTop(0) : $("html, body").animate({ scrollTop: 0 }, 600, "swing");
  });

  // ==========================
  // Safari検出
  // ==========================
  if (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
    document.body.classList.add("is-safari");
  }

  // ==========================
  // スキップリンク：確実にフォーカスを本文へ
  // ==========================
  var $main = $("#main");
  if ($main.length) $main.attr("tabindex","-1");
  $(".skip-link").on("click", function(){
    setTimeout(function(){ $main.trigger("focus"); }, 0);
  });

});