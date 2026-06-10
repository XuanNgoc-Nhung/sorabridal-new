//your code
setTimeout(function () {
  const loader = document.querySelector('.loader');
  loader && loader.classList.add('active');
}, 1000);
$(window).on('load',
  function () {
    jQuery(document).ready(function () {
		
      // var des = location.href;
      var $progressBarcol = $('.progress_col');
      var $progressBarcolLabel = $('.slider__label');
      $('.sub_menu li a').click(function () {
        var cate = $(this).attr('data-cate');

        $("#pills-tabDress button[data-taxotab=" + cate + "]").tab('show');
        $("#pills-tabDressContent div.tab-pane[data-taxotab=" + cate + "]").addClass('show active');

        // $(".page_album button[data-taxotab="+ cate +"]").tab('show');
        // $(".page_album div.tab-pane[data-taxotab="+ cate +"]").addClass('show active');

        // $('#pills-tabDressContent .tab-pane').removeClass('show active');
        // $('#pills-tabDressContent .tab-pane').each(function(){
        //   var taxo = $(this).attr('data-taxo');
        //   // console.log(taxo);
        //   var str = location.href.split("#")[1];
        //   // console.log(this);

        //   if(cate === taxo && str === taxo){
        //     // alert(taxo);
        //     $(this).addClass('show active');
        //   }
        // });
      });
      // $('#pills-tabDressContent .tab-pane').each(function(){
      //     var taxo = $(this).attr('data-taxo');
      //     // console.log(taxo);
      //     var str = location.href.split("#")[1];
      //     // console.log(str);

      //     if(str === taxo){
      //       // alert(taxo);
      //       $(this).addClass('show active');
      //     }
      //   });
      // $('#pills-tabDress li button').removeClass('active');
      // $('#pills-tabDress li button').each(function(){
      //   var taxo = $(this).attr('data-taxotab');
      //   // console.log(taxo);
      //   var str = location.href.split("#")[1];
      //   // console.log(str);

      //   if(str === taxo){
      //     // alert(taxo);
      //     $(this).addClass('active');
      //   }
      // });
      $(".fanpage_ft iframe").on("load", function () {
        let head = $(".fanpage_ft iframe").contents().find("head");
        let css = '<style>._2p3a{width: 100% !important;}</style>';
        $(head).append(css);
      });

      // $('.add_sub').click(function(){
      //   $('.sub_menu').addClass('active');
      // });
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        // console.log(scroll);
        if (scroll >= 100) {
          $('.header').addClass('change');
        } else {
          $('.header').removeClass('change');
        }
      });
      $('.animated-icon1').click(function () {
        $(this).toggleClass('open');
        $('.menu_vertical').toggleClass('open');
      });
      var optionSlick3 = {
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
          {
            breakpoint: 1028,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      };
      $('.list_teacher').slick({
        ...optionSlick3,
      });
	
      var windwdmb = $(window).width();
      if (windwdmb > 640) {
        $('.homeConcept .list_concept').slick({
          ...optionSlick3,
          slidesToShow: 4,
          arrows: true,
          appendArrows: $('#arrow_concep'),
          nextArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.11108 1.44446L6.16664 6.50001L1.11108 11.5556" stroke="#242424" stroke-width="1.44444"/></svg></div>',
          prevArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M6.88867 11.5555L1.83312 6.49999L6.88867 1.44443" stroke="#242424" stroke-width="1.44444"/></svg></div>',
          // responsive: [
          //   {
          //     breakpoint: 640,
          //     settings: {
          //       rows: 4,
          //       slidesToShow: 1,
          //       slidesToScroll: 1
          //       // variableWidth: true,
          //     }
          //   }
          // ]
        });
        $('.listFamous').slick({
          ...optionSlick3,
          slidesToShow: 4,
          arrows: true,
          appendArrows: $('#arrow_famous'),
          nextArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.11108 1.44446L6.16664 6.50001L1.11108 11.5556" stroke="#242424" stroke-width="1.44444"/></svg></div>',
          prevArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M6.88867 11.5555L1.83312 6.49999L6.88867 1.44443" stroke="#242424" stroke-width="1.44444"/></svg></div>',
          // responsive: [
          //   {
          //     breakpoint: 640,
          //     settings: {
          //       rows: 4,
          //       slidesToShow: 1,
          //       slidesToScroll: 1
          //       // variableWidth: true,
          //     }
          //   }
          // ]
        });
      }else{
        $('.customer_section-main .mimosa-banner .mimosa-bannerYear').slick({
          ...optionSlick3,
          slidesToShow: 4,
          slidesToScroll: 4,
          autoplay: false,
          variableWidth: true,
          infinite: false,
          arrows: true,
          prevArrow: false,
          nextArrow: '<div class="next_slick"><i class="fa-solid fa-arrow-right-long"></i></div>',
          responsive: [
            {
              breakpoint: 1028,
              settings: {
                slidesToScroll: 4
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToScroll: 4
              }
            }
          ]
        });
       $('.section_customer .mimosa-banner .nav a').click(function(){
        $('.section_customer .mimosa-banner .nav a').removeClass('active');
        $(this).addClass('active');
       });
      };


      var optionSlick2 = {
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }
      var optionSlick1 = {
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        fade: true,
      };
      const tabs_col = $('.homeCollection button[data-bs-toggle="tab"]');
      const list_col = $('.homeCollection .list_collection');


      const slickOptionsCol = {
        rows: 2,
        ...optionSlick3,
        arrows: true,
        appendArrows: $('#arrow_col'),
        nextArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 4L16 0.5359L16 7.4641L22 4ZM-5.24537e-08 4.6L16.6 4.6L16.6 3.4L5.24537e-08 3.4L-5.24537e-08 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        prevArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4L6 0.5359L6 7.4641L0 4ZM22 4.6L5.4 4.6L5.4 3.4L22 3.4L22 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        responsive: [
          {
            breakpoint: 640,
            settings: {
              rows: 4,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      };
      (list_col.length > 0) && list_col.slick(slickOptionsCol);
      (tabs_col.length > 0) && tabs_col.on('shown.bs.tab', function () {
        (list_col.length > 0) && list_col.slick('setPosition');
      });

      list_col.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;
        $progressBarcol.css('background-size', calc + '% 100%').attr('aria-valuenow', calc);
        $progressBarcolLabel.text(calc + '% completed');
        // $progressBar.addClass('active');
      });

      var list_reason = $('.list_reason').slick({
        ...optionSlick1,
        arrows: true,
        appendArrows: $('#arrow_reason'),
        prevArrow: '<div class="arrow"><svg width="9" height="61" viewBox="0 0 9 61" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.85355 0.646442C4.65828 0.451179 4.3417 0.45118 4.14644 0.646442L0.964459 3.82842C0.769197 4.02369 0.769197 4.34027 0.96446 4.53553C1.15972 4.73079 1.4763 4.73079 1.67157 4.53553L4.49999 1.7071L7.32842 4.53553C7.52368 4.73079 7.84027 4.73079 8.03553 4.53553C8.23079 4.34027 8.23079 4.02369 8.03553 3.82842L4.85355 0.646442ZM5 61L4.99999 0.999996L3.99999 0.999996L4 61L5 61Z" fill="black"/></svg></div>',
        nextArrow: '<div class="arrow"><svg width="9" height="61" viewBox="0 0 9 61" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.85355 60.3536C4.65829 60.5488 4.34171 60.5488 4.14644 60.3536L0.964464 57.1716C0.769202 56.9763 0.769202 56.6597 0.964464 56.4645C1.15973 56.2692 1.47631 56.2692 1.67157 56.4645L4.5 59.2929L7.32843 56.4645C7.52369 56.2692 7.84027 56.2692 8.03553 56.4645C8.23079 56.6597 8.23079 56.9763 8.03553 57.1716L4.85355 60.3536ZM5 -8.77458e-09L5 60L4 60L4 8.77458e-09L5 -8.77458e-09Z" fill="black"/></svg></div>',
      });
      list_reason.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        // if(i<9){
        //   $('#current_feed').text('0'+i);
        //   $('#total_feed').text('0'+slick.slideCount);
        // }else{
        //   $('#current_feed').text(i);
        //   $('#total_feed').text(slick.slideCount);
        // }
        $('#current_feed').text(i);
        $('#total_feed').text(slick.slideCount);
      });
      $('.list_feed').slick({
        ...optionSlick2,
        dots: true,
      });
      //  news

      $('.list_logo').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 5,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
      });
      const tabsconn = $('.homeConnect button[data-bs-toggle="tab"]');
      const listconn = $('.homeConnect .list_conn');
      // var $progressBar = $('.progress');
      // var $progressBarLabel = $('.slider__label');
      const slickOptionsConn = {
        ...optionSlick3,
        slidesToShow: 4,
        dots: true,
      };
      (listconn.length > 0) && listconn.slick(slickOptionsConn);
      (tabsconn.length > 0) && tabsconn.on('shown.bs.tab', function () {
        (listconn.length > 0) && listconn.slick('setPosition');
      });

      var windwd = $(window).width();
      // if(windwd < 640){
      //   // $('.right_header').append($('.menu_header'));
      //   $('.menu_header').append($('.right_header'));
      // }
      // $('.animated-icon1').click(function(){
      //   $(this).toggleClass('open');
      //   $('.menu_header').toggleClass('open');
      // });
      AOS.init({
        easing: 'ease-in-out',
        mirror: true,
        once: false,
        duration: 700,
        delay: .05
      });
      AOS.refresh();
      $('.story_aboutpg .gallery_img').slick({
        ...optionSlick2,
        arrows: true,
        appendArrows: $('#arrow_story'),
        nextArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.11108 1.44446L6.16664 6.50001L1.11108 11.5556" stroke="#fff" stroke-width="1.44444"/></svg></div>',
        prevArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M6.88867 11.5555L1.83312 6.49999L6.88867 1.44443" stroke="#fff" stroke-width="1.44444"/></svg></div>',
      });
      $('.list_history').slick({
        // ...optionSlick1,
        // asNavFor: '.list_yaer',
        // infinite: true,
        appendArrows: $('#arrow_history'),
        nextArrow: '<div class="arrow_next"><svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 5.04883C1.08579 5.04883 0.75 5.38461 0.75 5.79883C0.75 6.21304 1.08579 6.54883 1.5 6.54883L1.5 5.04883ZM16.0303 6.32916C16.3232 6.03627 16.3232 5.56139 16.0303 5.2685L11.2574 0.495528C10.9645 0.202635 10.4896 0.202635 10.1967 0.495528C9.90381 0.788421 9.90381 1.26329 10.1967 1.55619L14.4393 5.79883L10.1967 10.0415C9.90381 10.3344 9.90381 10.8092 10.1967 11.1021C10.4896 11.395 10.9645 11.395 11.2574 11.1021L16.0303 6.32916ZM1.5 6.54883L15.5 6.54883L15.5 5.04883L1.5 5.04883L1.5 6.54883Z" fill="white"/></svg></div>',
        prevArrow: '<div class="arrow_prev"><svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 5.04883C15.9142 5.04883 16.25 5.38461 16.25 5.79883C16.25 6.21304 15.9142 6.54883 15.5 6.54883L15.5 5.04883ZM0.96967 6.32916C0.676777 6.03627 0.676777 5.56139 0.96967 5.2685L5.74264 0.495528C6.03553 0.202635 6.51041 0.202635 6.8033 0.495528C7.09619 0.788421 7.09619 1.26329 6.8033 1.55619L2.56066 5.79883L6.8033 10.0415C7.09619 10.3344 7.09619 10.8092 6.8033 11.1021C6.51041 11.395 6.03553 11.395 5.74264 11.1021L0.96967 6.32916ZM15.5 6.54883L1.5 6.54883L1.5 5.04883L15.5 5.04883L15.5 6.54883Z" fill="white"/></svg></div>',
        lazyLoad: 'progressive',
        arrows: true,
        // fade: true,
        centerPadding: '0px',
        infinite: true,
        centerMode: true,
        speed: 500,
        swipe: false,
        cssEase: 'ease-in-out',
        slidesToShow: 1,
        adaptiveHeight: true,
        asNavFor: '.list_yaer'
      });
      $('.list_yaer').slick({
        lazyLoad: 'progressive',
        arrows: false,
        infinite: true,
        slidesToShow: 7,
        centerMode: true,
        // centerPadding: '53px',
        adaptiveHeight: true,
        cssEase: 'ease-in-out',
        asNavFor: '.list_history',
        focusOnSelect: true,
        // ...optionSlick3,
        // slidesToShow: 7,
        // slidesToScroll: 5,
        // centerMode: true,
        // asNavFor: '.list_history',
        // infinite: true,
        responsive: [
          {
            breakpoint: 1028,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 640,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          }
        ]
      });
      $('.service_aboutpg .list_service').slick({
        ...optionSlick1,
        arrows: false,
        // appendArrows: $('#arrow_service'),
        // nextArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.11108 1.44446L6.16664 6.50001L1.11108 11.5556" stroke="#242424" stroke-width="1.44444"/></svg></div>',
        // prevArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M6.88867 11.5555L1.83312 6.49999L6.88867 1.44443" stroke="#242424" stroke-width="1.44444"/></svg></div>',
      });
      $('.benefit_academy .gallery').slick({
        ...optionSlick1,
        fade: true,
        autoplay: true,
        arrows: true,
        appendArrows: $('#arrow_concep'),
        nextArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.11108 1.44446L6.16664 6.50001L1.11108 11.5556" stroke="#242424" stroke-width="1.44444"/></svg></div>',
        prevArrow: '<div class="arrow"><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M6.88867 11.5555L1.83312 6.49999L6.88867 1.44443" stroke="#242424" stroke-width="1.44444"/></svg></div>',
      });
      $('.news_academy .list_news').slick({
        ...optionSlick2,
        arrows: true,
        appendArrows: $('#arrow_news'),
        nextArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 4L16 0.5359L16 7.4641L22 4ZM-5.24537e-08 4.6L16.6 4.6L16.6 3.4L5.24537e-08 3.4L-5.24537e-08 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        prevArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4L6 0.5359L6 7.4641L0 4ZM22 4.6L5.4 4.6L5.4 3.4L22 3.4L22 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
      });
      $('.news_academy .list_news').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;
        $progressBarcol.css('background-size', calc + '% 100%').attr('aria-valuenow', calc);
        $progressBarcolLabel.text(calc + '% completed');
        // $progressBar.addClass('active');
      });
      $('.family_feed .list_collection').slick({
        rows: 2,
        ...optionSlick3,
        arrows: true,
        appendArrows: $('#arrow_col'),
        nextArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 4L16 0.5359L16 7.4641L22 4ZM-5.24537e-08 4.6L16.6 4.6L16.6 3.4L5.24537e-08 3.4L-5.24537e-08 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        prevArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4L6 0.5359L6 7.4641L0 4ZM22 4.6L5.4 4.6L5.4 3.4L22 3.4L22 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        responsive: [
          {
            breakpoint: 640,
            settings: {
              rows: 4,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        // ...optionSlick3,
        // arrows: true,
        // appendArrows: $('#arrow_family'),
        // nextArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 4L16 0.5359L16 7.4641L22 4ZM-5.24537e-08 4.6L16.6 4.6L16.6 3.4L5.24537e-08 3.4L-5.24537e-08 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        // prevArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4L6 0.5359L6 7.4641L0 4ZM22 4.6L5.4 4.6L5.4 3.4L22 3.4L22 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
      });
      $('.list_news_banner').slick({
        ...optionSlick1,
        arrows: true,
        appendArrows: $('#arrow_banner'),
        nextArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 4L16 0.5359L16 7.4641L22 4ZM-5.24537e-08 4.6L16.6 4.6L16.6 3.4L5.24537e-08 3.4L-5.24537e-08 4.6Z" fill="#fff" fill-opacity="0.6"/></svg></div>',
        prevArrow: '<div class="arrow"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4L6 0.5359L6 7.4641L0 4ZM22 4.6L5.4 4.6L5.4 3.4L22 3.4L22 4.6Z" fill="#fff" fill-opacity="0.6"/></svg></div>',
      });

      // parallax scroll
      // const scroller = new LocomotiveScroll({
      //   el: document.querySelector('[]'),
      //   smooth: true
      // })
      // var check = true;
      // gsap.registerPlugin(ScrollTrigger)


      // scroller.on('scroll', ScrollTrigger.update)
      // scroller.on('scroll', function(e){ console.log(e.delta.y); if(check && e.delta.y > 7362){  check = false; ScrollTrigger.refresh();  }})

      // ScrollTrigger.scrollerProxy(
      //     '.main_page', {
      //         scrollTop(value) {
      //             return arguments.length ?
      //             scroller.scrollTo(value, 0, 0) :
      //             scroller.scroll.instance.scroll.y
      //         },
      //         getBoundingClientRect() {
      //             return {
      //                 left: 0, top: 0, 
      //                 width: window.innerWidth,
      //                 height: window.innerHeight
      //             }
      //         }
      //     }
      // )


      // ScrollTrigger.create({
      //     trigger: '.image-mask',
      //     scroller: '.container',
      //     start: 'top+=30% 50%',
      //     end: 'bottom-=40% 50%',
      //     animation: gsap.to('.image-mask', {backgroundSize: '120%'}),
      //     scrub: 2,
      //     // markers: true
      // })


      // ScrollTrigger.addEventListener('refresh', () => scroller.update())


      // ScrollTrigger.refresh()






    });

    $(document).ready(function () {
      var time = 2;
      var $bar,
        $slick,
        isPause,
        tick,
        percentTime;

      $slick = $('.slider');
      $slick.slick({
        draggable: true,
        adaptiveHeight: false,
        dots: false,
        mobileFirst: true,
        pauseOnDotsHover: true,
        arrows: false, 
        fade: true,
        prevArrow: '<svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.5" d="M19 5.75C19.4142 5.75 19.75 6.08579 19.75 6.5C19.75 6.91421 19.4142 7.25 19 7.25V5.75ZM0.469669 7.03033C0.176777 6.73744 0.176777 6.26256 0.469669 5.96967L5.24264 1.1967C5.53553 0.903806 6.01041 0.903806 6.3033 1.1967C6.59619 1.48959 6.59619 1.96447 6.3033 2.25736L2.06066 6.5L6.3033 10.7426C6.59619 11.0355 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033L0.469669 7.03033ZM19 7.25H1V5.75H19V7.25Z" fill="#242424"/></svg>',
        nextArrow: '<svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.75C0.585786 5.75 0.25 6.08579 0.25 6.5C0.25 6.91421 0.585786 7.25 1 7.25V5.75ZM19.5303 7.03033C19.8232 6.73744 19.8232 6.26256 19.5303 5.96967L14.7574 1.1967C14.4645 0.903806 13.9896 0.903806 13.6967 1.1967C13.4038 1.48959 13.4038 1.96447 13.6967 2.25736L17.9393 6.5L13.6967 10.7426C13.4038 11.0355 13.4038 11.5104 13.6967 11.8033C13.9896 12.0962 14.4645 12.0962 14.7574 11.8033L19.5303 7.03033ZM1 7.25H19V5.75H1V7.25Z" fill="#C2185B"/></svg>',
        appendArrows: $('#arrow_banner'),
      });
      $('.homeBanner #custom_arow #arrow_banner svg.prev').on('click', function() {
        $slick.slick('slickPrev');
      });
      $('.homeBanner #custom_arow #arrow_banner svg.next').on('click', function() {
        $slick.slick('slickNext');
      });
      $bar = $('.slider-prg_slick .prg_slick');
      $barRound = $('.prg_slick');

      $('.slider-wrapper').on({
        mouseenter: function () {
          isPause = true;
        },
        mouseleave: function () {
          isPause = false;
        }
      })

      function startprg_slickbar() {
        resetprg_slickbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);
      }
      var $rbar = $('.prg_slick circle');
      var rlen = 2 * Math.PI * $rbar.attr('r');
      function interval() {

        percentTime += 1 / (time + 0.1);
        $bar.css({
          width: percentTime + '%'
        });
        $rbar.css({
          'stroke-dasharray': rlen,
          'stroke-dashoffset': rlen * (1 - percentTime / 100)
        });

        if (percentTime >= 100) {
          $slick.slick('slickNext');
          startprg_slickbar();
        }

      }


      function resetprg_slickbar() {
        $bar.css({
          width: 0 + '%'
        });
        clearTimeout(tick);
      }

      startprg_slickbar();
      // $('#custom_arow').append($('.homeBanner .slick-dots'));
    });

    
  });

