// 戻るボタン(元：SACOCHAN-DESIGN.COM)
$(document).ready(function () {
    const back_button = $('.back_button');
    const news = $('.news');

    if (!back_button.length || !news.length) {
      console.warn('必要な要素が見つかりません');
      return;
    }
    function handleScroll() {
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const newsTop = news.offset().top;

      // sec02の上端が画面内に入ったら表示
      if (scrollTop + windowHeight > newsTop) {
        back_button.addClass('is-show');
      } else {
        back_button.removeClass('is-show');
      }
    }
    // スクロールイベント（負荷軽減も可）
    $(window).on('scroll', handleScroll);
    handleScroll(); // 初回チェック
  });
