<!-- <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.min.js"></script> -->
    <!-- Kit font -->
    <script src="{{ asset('assets/mimosa/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/mimosa/js/aos.js') }}"></script>
    <script src="{{ asset('assets/mimosa/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/mimosa/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/mimosa/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/mimosa/js/list.min.js') }}"></script>
    <!-- Lazyload -->
    <script type="text/javascript" src="{{ asset('assets/mimosa/js/lazysizes.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mimosa/js/ls.unveilhooks.min.js') }}"></script>
    <!-- custom -->
    <script src="{{ asset('assets/mimosa/js/wowslider-banner.js') }}"></script>
    <script src="{{ asset('assets/mimosa/js/custom.js') }}"></script>
    <script>
        var btn = $('#button_toptop');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    <script type="speculationrules">
        {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/mimosa/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch,
        .no-prefetch a"}}]},"eagerness":"conservative"}]}
    </script>
    <script id="wp-hooks-js" src="{{ asset('assets/mimosa/js/hooks.min.js') }}"></script>
    <script id="wp-i18n-js" src="{{ asset('assets/mimosa/js/i18n.min.js') }}"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        //# sourceURL=wp-i18n-js-after
    </script>
    <script id="swv-js" src="{{ asset('assets/mimosa/js/contact-form-7-swv.js') }}"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/mimosawedding.vn\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        //# sourceURL=contact-form-7-js-before
    </script>
    <script id="contact-form-7-js" src="{{ asset('assets/mimosa/js/contact-form-7.js') }}"></script>
    <script id="daim-track-internal-links-js-before">
        window.DAIM_PARAMETERS = {
            ajax_url: "https://mimosawedding.vn/wp-admin/admin-ajax.php",
            nonce: "9e1818396c"
        };
        //# sourceURL=daim-track-internal-links-js-before
    </script>
    <script id="daim-track-internal-links-js" src="{{ asset('assets/mimosa/js/track-internal-links.js') }}"></script>
    <script id="wp-emoji-settings" type="application/json">
        {
            "baseUrl": "https://s.w.org/images/core/emoji/17.0.2/72x72/",
            "ext": ".png",
            "svgUrl": "https://s.w.org/images/core/emoji/17.0.2/svg/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https://mimosawedding.vn/wp-includes/js/wp-emoji-release.min.js?ver=7.0"
            }
        }
    </script>
    <script type="module">
        /*! This file is auto-generated */ const a=JSON.parse(document.getElementById("wp-emoji-settings").textContent),o=(window._wpemojiSettings=a,"wpEmojiSettingsSupports"),s=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function
        c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const a=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return
        t.every((e,t)=>e===a[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e
        <n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,a){switch(t){case
            "flag":return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,
            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case "emoji":return!a(e, "\ud83e\u1fac8")}return!1}function f(e,t,n,a){let r;const o=(r="undefined" !=typeof WorkerGlobalScope&&self
            instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement( "canvas")).getContext( "2d",{willReadFrequently:!0}),s=(o.textBaseline="top" ,o.font="600 32px Arial" ,{});return e.forEach(e=>{s[e]=t(o,e,n,a)}),s}function r(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}a.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof
            e&&"number"==typeof e.timestamp&&(new Date).valueOf()
            <e.timestamp+604800&& "object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if( "undefined"!=typeof Worker&& "undefined"!=typeof OffscreenCanvas&&
                "undefined"!=typeof URL&&URL.createObjectURL&& "undefined"!=typeof Blob)try{var e="postMessage(" +f.toString()+ "("+[JSON.stringify(s),u.toString(),c.toString(),p.toString()].join( ",")+ "));",a=new Blob([e],{type: "text/javascript"});const r=new Worker(URL.createObjectURL(a),{name:
                "wpTestEmojiSupports"});return void(r.onmessage=e=>{i(n=e.data),r.terminate(),t(n)})}catch(e){}i(n=f(s,u,c,p))}t(n)}).then(e=>{for(const n in e)a.supports[n]=e[n],a.supports.everything=a.supports.everything&&a.supports[n],"flag"!==n&&(a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&a.supports[n]);var
                t;a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&!a.supports.flag,a.supports.everything||((t=a.source||{}).concatemoji?r(t.concatemoji):t.wpemoji&&t.twemoji&&(r(t.twemoji),r(t.wpemoji)))}); //# sourceURL=https://mimosawedding.vn/wp-includes/js/wp-emoji-loader.min.js
    </script>
<script>
    jQuery(document).ready(function() {
        var $progressBarcol = $('.progress_col');
        var $progressBarcolLabel = $('.slider__label');
        var tabs_news = $('#news_home button[data-bs-toggle="tab"]');
        var list_news = $('#news_home [data-slick="news"]');
        const slickOptions_news = {
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            responsive: [{
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }],
            arrows: true,
            // appendArrows: $('.arrow_news'),
            nextArrow: '<div class="arrow arrownext"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 4L16 0.5359L16 7.4641L22 4ZM-5.24537e-08 4.6L16.6 4.6L16.6 3.4L5.24537e-08 3.4L-5.24537e-08 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
            prevArrow: '<div class="arrow arrowprev"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4L6 0.5359L6 7.4641L0 4ZM22 4.6L5.4 4.6L5.4 3.4L22 3.4L22 4.6Z" fill="#141414" fill-opacity="0.6"/></svg></div>',
        };
        (list_news.length > 0) && list_news.slick(slickOptions_news);
        (tabs_news.length > 0) && tabs_news.on('shown.bs.tab', function() {
            (list_news.length > 0) && list_news.slick('setPosition');
        });
        list_news.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;
            $progressBarcol.css('width', calc + '%').attr('aria-valuenow', calc);
            $progressBarcolLabel.text(calc + '% completed');
        });
        //customer
        const btnShow = document.querySelector('.mimosa-bannerRate .tab-pane')
        btnShow.addEventListener('click', function() {
            btnShow.classList.add('active')
        })
        const slider = document.querySelector('.mimosa-bannerYear');
        let isDown = false;
        let startX;
        let scrollLeft;
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            //   slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; //scroll-fast
            slider.scrollLeft = scrollLeft - walk;
            console.log(walk);
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let script = document.createElement("script");
                    script.src = "{{ asset('assets/mimosa/js/tiktok-embed.js') }}";
                    script.async = true;
                    document.body.appendChild(script);
                    observer.disconnect(); // Chỉ tải script một lần
                }
            });
        });
        document.querySelectorAll(".tiktok-embed").forEach(embed => observer.observe(embed));
    });
    // document.getElementById("loadMoreTiktok").addEventListener("click", function() {
    //     document.querySelectorAll(".item_tiktok:nth-child(n+4)").forEach(el => el.style.display = "block");
    //     this.style.display = "none"; // Ẩn nút sau khi load hết
    // });
</script>
