"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });

  //アコーディオンをクリックした時の動作
  $('.title').on('click', function () {
    //タイトル要素をクリックしたら
    var findElm = $(this).next(".box"); //直後のアコーディオンを行うエリアを取得し
    $(findElm).slideToggle(); //アコーディオンの上下動作

    if ($(this).hasClass('close')) {
      //タイトル要素にクラス名closeがあれば
      $(this).removeClass('close'); //クラス名を除去し
    } else {
      //それ以外は
      $(this).addClass('close'); //クラス名closeを付与
    }
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });
  $(function () {
    $('.faq-slider').slick({
      autoplay: true,
      //自動でスクロール
      autoplaySpeed: 0,
      //自動再生のスライド切り替えまでの時間を設定
      speed: 5000,
      //スライドが流れる速度を設定
      cssEase: "linear",
      //スライドの流れ方を等速に設定
      slidesToShow: 3,
      //表示するスライドの数
      swipe: false,
      // 操作による切り替えはさせない
      arrows: false,
      //矢印非表示
      pauseOnFocus: false,
      //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false,
      //スライダーにマウスホバーした時にスライドを停止させるか
      responsive: [{
        breakpoint: 750,
        settings: {
          slidesToShow: 3 //画面幅750px以下でスライド3枚表示
        }
      }]
    });
  });
  $(function () {
    $(".slider").slick({
      autoplay: true,
      fade: true
    });
  });
  var rellax = new Rellax(".js-rellax");
});