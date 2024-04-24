$(document).ready(function () {
    $( ".messengers__button" ).on( "click", function() {
        $('.messengers__button > div').fadeToggle(300);
        $('.messengers__links').fadeToggle(300);
    } );

    $( ".procedure__item-header" ).on( "click", function() {
        if ($(this).closest('.procedure__item').hasClass('active')){
            $(this).closest('.procedure__item').removeClass('active');
        } else {
            $('.procedure__item').removeClass('active');
            $(this).closest('.procedure__item').addClass('active');
        }


    } );
    function AosStart(){

    }
    AosStart()

    $( ".vacancies__list-more" ).on( "click", function() {
            $(this).closest('.vacancies__list-group').toggleClass('show');
        } );

    if ($('.banner').length) {
        let LoopSwiper = '';
        if ($('.banner .swiper').hasClass('swiper-main')){
            LoopSwiper = 'true';
        } else {
            LoopSwiper = 'false';
        }
        var swiper = new Swiper(".banner .swiper", {
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: LoopSwiper,
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
            autoHeight: true,
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

    if ($('.waranty').length) {
        var Waranty = new Swiper(".waranty .swiper", {
            speed: 500,
            slidesPerView: 1,
            spaceBetween: 80,
            loop: 'true',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".waranty .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".waranty .banner__next",
                prevEl: ".waranty .banner__prev",
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
        $(".frized").click(function () {
            $(this).toggleClass('frized-active');
            $('.header__nav-absolute').toggleClass('active');
        });
        $(".main").click(function () {
            $('.frized').removeClass('frized-active');
            $('.header__nav-absolute').removeClass('active');
        });
        $(".js-burger").click(function () {
            $(this).toggleClass('active');
            $('.header__mobile').fadeToggle(300);
        });

        const div = document.querySelector( '.header');

        document.addEventListener( 'click', (e) => {
            const withinBoundaries = e.composedPath().includes(div);

            if ( ! withinBoundaries ) {
                $('.js-burger').removeClass('active');
                $('.header__mobile').fadeOut(300);
            }
        })
    }
    PopupInit();

    function TabInit(){
        if($('.tabs-elements').length){
            $(".tabs-elements .tabs-nav-item").click(function() {
                $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
                $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "flex")
                    .hide()
                    .fadeIn();
            }).eq(0).addClass("active");
            $(".tabs-elements .tabs-content-item").eq(0).addClass("active");
        }
    }
    TabInit();

    function CaruselSlider(){
            if($('.carusel').length){
                var CaruselSlider = new Swiper('.carusel .swiper', {
                    spaceBetween: 30,
                    loop: true,
                    slidesPerView: 'auto',
                    preventInteractionOnTransition: true,
                    speed: 5000,
                    autoplay: {
                        enabled: true,
                        delay: 1,
                    },
                });
            }
    }
    CaruselSlider();

    function CaruselSliderBig(){
                if($('.premium').length){
                    var CaruselSlider = new Swiper('.premium .swiper', {
                        spaceBetween: 0,
                        loop: true,
                        slidesPerView: 'auto',
                        preventInteractionOnTransition: true,
                        speed: 8000,
                        autoplay: {
                            enabled: true,
                            delay: 1,
                        },
                    });
                }
        }
        CaruselSliderBig();

    function CompareSliders() {
        $(".dragme").each(function( index ) {

        });
        var $dragMe = $(".dragme"),
        $container = $dragMe.closest(".sl-container"),
        $viewAfter = $dragMe.closest(".sl-container").find(".view-after");
        $dragMe.draggable({
            containment: "parent",
            drag: function() {
                $(this).closest(".sl-container").find(".view-after").css({
                    width : parseFloat($(this).css('left')) + 5
                });
            }
        });
        $container.on("click", function(event) {
            var eventLeft = event.pageX - $(this).offset().left - 15;
            animateTo(eventLeft, $(this));
        });
        animateTo("50%");
        function animateTo(_left, e) {
            e.find('.dragme').animate({
                left: _left
            }, 'fast', 'linear');
            e.find('.view-after').animate({
                width: _left
            }, 'fast', 'linear');
        }
    }

    CompareSliders();





});

