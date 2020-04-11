  $(document).ready(function () {
      $('.slider').bxSlider({
          auto: true,
          speed: 300,
          pager: false,
          controls: false // 이전 다음 버튼 노출 여부
      });


      $('header ul:nth-child(1) li:nth-child(2)').mouseenter(function () {
          $("header ul:nth-child(2) li:nth-child(2)").css("z-index", "99");

          $('header ul:nth-child(2) li:nth-child(2)').stop().animate({
              height: 240
          })
          console.log('over')
      }).mouseleave(function () {
          $('header ul:nth-child(2) li:nth-child(2)').stop().animate({
              height: 1
          })
          console.log('out')
      })
  });
