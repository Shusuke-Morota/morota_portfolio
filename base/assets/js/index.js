$(function () {
  const $drawerToggle = $(".js-drawerToggle");

  function activeDrawer() {
    $drawerToggle.toggleClass("active");
  }

  function activeNav() {
    const $nav = $(".js-navigation");
    $nav.toggleClass("active");
  }

  function fixedBody() {
    const $body = $("body");
    $body.toggleClass("active");
  }

  function fadeUpAnimation() {
    const $fadeUpTrigger = (".fadeUpTrigger")
    $($fadeUpTrigger).each(function() { //fadeUpTriggerというクラス名が
      const $elementPosition = $(this).offset().top-50;//要素より、50px上の
      const $scroll = $(window).scrollTop();
      const $sectionHeight = $(window).height();
      if ($scroll >= $elementPosition - $sectionHeight) {
      $(this).addClass("fadeUp");// 画面内に入ったらfadeUpというクラス名を追記
      }
    });
  }

  function hamburgerMenu() {
    activeDrawer();
    activeNav();
    fixedBody();
  }

  function setEvent() {
    $drawerToggle.on("click", hamburgerMenu)
  }

  function scrollEvent() {
    $(window).scroll(function() {
      fadeUpAnimation();
    });
  }

  function init() {
    scrollEvent();
    setEvent();
  }

  init();
});
