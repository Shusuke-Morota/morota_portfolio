$(function() {
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

  function hamburgerMenu() {
    activeDrawer();
    activeNav();
    fixedBody();
  }

  function fadeUpAnimation() {
    const $fadeUpTrigger = (".fadeUpTrigger")
    $($fadeUpTrigger).each(function() {
      const $elementPosition = $(this).offset().top-50;
      const $scroll = $(window).scrollTop();
      const $sectionHeight = $(window).height();
      if ($scroll >= $elementPosition - $sectionHeight) {
      $(this).addClass("fadeUp");
      }
    });
  }

  const $tab = $('.tab');
  function activeTab($this) {
    $tab.removeClass('is-active');
    $this.addClass('is-active');
  }

  function activePanel(index) {
    const $panels = $('.panels');
    $panels.removeClass('is-show').eq(index).addClass('is-show');
  }

  function changeTab() {
    const $this = $(this);
    const index = $this.index();
    activeTab($this);
    activePanel(index);
  }

  function pageTopButton() {
    const $pagetop = $('#js-pagetop');
    $pagetop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        $pagetop.fadeIn();
      } else {
        $pagetop.fadeOut();
      }
    });
    $pagetop.click(function () {
      $('body, html').animate({
          scrollTop: 0
      }, 500);
      return false;
    });
  }

  function setEvent() {
    $drawerToggle.on("click", hamburgerMenu)
    $tab.on('click', changeTab);
  }

  function scrollEvent() {
    $(window).scroll(function() {
      fadeUpAnimation();
    });
  }

  function init() {
    scrollEvent();
    setEvent();
    pageTopButton();
  }

  init();
});
