require('./bootstrap');
require('jquery');
$(function () {

    $('.js-toggle-hamburger-menu').on('click', function () {
      $(this).toggleClass('active');
    //   背景をスライドする処理
      $('.js-nav-menu').toggleClass('active');
    });
  });
  