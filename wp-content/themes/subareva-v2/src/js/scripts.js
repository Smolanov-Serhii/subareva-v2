$(document).ready(function () {

    $( ".messengers__button" ).on( "click", function() {
        $('.messengers__button > div').fadeToggle(300);
        $('.messengers__links').fadeToggle(300);
    } );
    function MobMenuInit(){
        if ($(".header__burger").length){
            $( ".header__burger" ).on( "click", function() {
                $(this).toggleClass('active');
                $('.header').toggleClass('active-menu');
                $('.header__nav').toggleClass('active');
            } );

            const div = document.querySelector( '.header');

            document.addEventListener( 'click', (e) => {
                const withinBoundaries = e.composedPath().includes(div);

                if ( ! withinBoundaries ) {
                    $('.header__burger').removeClass('active');
                    $('.header').removeClass('active-menu');
                    $('.header__nav').removeClass('active');
                }
            })
        }
    }
    MobMenuInit();

    // $(".header__nav, .footer__nav").on("click","a", function (event) {
    //     event.preventDefault();
    //     $('.header__burger').removeClass('active');
    //     $('.header').removeClass('active-menu');
    //     $('.header__nav').removeClass('active');
    //     var id  = $(this).attr('href'),
    //         top = $(id).offset().top;
    //     $('body,html').animate({scrollTop: top - 100}, 1000);
    // });

    function AosStart(){

    }
    AosStart()
    function HeaderMove(){
        if ($("header").length){
            let $menu = $("header");
            $(window).scroll(function() {
                let winScrollTop = $(this).scrollTop();
                if ( winScrollTop > 100 && $menu.hasClass("default")){
                    $menu.removeClass("default").addClass("moved");
                    $('.start__decoration-top').addClass("moved");
                } else if(winScrollTop <= 100 && $menu.hasClass("moved")) {
                    $menu.removeClass("moved").addClass("default");
                } else if(winScrollTop <= 80 && $('.start__decoration-top').hasClass("moved")) {
                    $('.start__decoration-top').removeClass("moved");
                }
            });
        }
    }
    HeaderMove();

    if ($('.banner').length) {
        var swiper = new Swiper(".banner .swiper", {
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: 'true',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".banner .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".banner .banner__next",
                prevEl: ".banner .banner__prev",
            },
        });
    }

    if ($('.reviews').length) {
        var Reviewes = new Swiper(".reviews .swiper", {
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 80,
            loop: 'true',
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".reviews .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".reviews .banner__next",
                prevEl: ".reviews .banner__prev",
            },
        });
    }

    if ($('.params').length) {
        var Params = new Swiper(".params .swiper", {
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: 'true',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".params .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".params .banner__next",
                prevEl: ".params .banner__prev",
            },
        });
    }

    function PopupInit(){
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.popup-zapis').fadeOut(300);
            $('.popup-write').fadeOut(300);
            $('#success-send').fadeIn(300);
            $('.wpcf7-response-output').empty();
            setTimeout(function (){
                $('#success-send').fadeOut(300);
                $('body').removeClass('locked');
            }, 2000);
        }, false );
        $(".js-form").click(function () {
            $('body').addClass('locked');
            $('.popup-zapis').fadeIn(300);
        });
        $(".js-write").click(function () {
            $('body').addClass('locked');
            $('.popup-write').fadeIn(300);
        });
        $(".popup-zapis__close").click(function () {
            $('body').removeClass('locked');
            $(this).closest('.popup-zapis').fadeOut(300);
        });
        $(".popup-write__close").click(function () {
            $('body').removeClass('locked');
            $(this).closest('.popup-write').fadeOut(300);
        });
    }
    PopupInit();

    function TabInit(){
        if($('.tabs-elements').length){
            $(".tabs-elements .tabs-nav-item").click(function() {
                $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
                $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "block")
                    .hide()
                    .fadeIn();
            }).eq(0).addClass("active");
            $(".tabs-elements .tabs-content-item").eq(0).addClass("active");
        }
    }
    TabInit();


});

