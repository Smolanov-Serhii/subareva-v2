<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package subareva-v2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5JZXV5NJ');</script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>-->
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>-->
<!--    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>-->
	<?php wp_head(); ?>
    <?php
    if (is_page(102)) {
        ?>
        <!-- Meta Pixel Code Главная страница-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '960815658762949');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=960815658762949&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <?php
    } else if (is_page(646)){
        ?>
        <!-- Meta Pixel Code страница брекеты-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1529161304296364');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1529161304296364&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10965270143">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-10965270143');
        </script>
        <?php
    } else if (is_page(1136)){
        ?>
        <!-- Meta Pixel Code Вакансия страница-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '418487571043805');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=418487571043805&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <?php
    } else if (is_page(822)){
        ?>
        <!-- Meta Pixel Code Виниры страница-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '7361673277287154');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=7361673277287154&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10965270143">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-10965270143');
        </script>
        <?php
    } else if (is_page(544)){
        ?>
        <!-- Meta Pixel Code Имплантация сраница-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1857355611353656');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1857355611353656&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10965270143">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-10965270143');
        </script>
        <?php
    } else if (is_page(447)){
        ?>
        <!-- Meta Pixel Code Косметология страница-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '963658621810121');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=963658621810121&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <?php
    } else if (is_page(369)){
        ?>
        <!-- Meta Pixel Code Стоматология страница-->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1469401497311831');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1469401497311831&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10965270143">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-10965270143');
        </script>
        <?php
    }
    ?>
</head>

<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
            AOS.init({
                // Global settings:
                disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
                startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
                initClassName: 'aos-init', // class applied after initialization
                animatedClassName: 'aos-animate', // class applied on animation
                useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
                disableMutationObserver: false, // disables automatic mutations' detections (advanced)
                debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
                // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
                offset: 120, // offset (in px) from the original trigger point
                delay: 0, // values from 0 to 3000, with step 50ms
                duration: 1000, // values from 0 to 3000, with step 50ms
                easing: 'ease', // default easing for AOS animations
                once: true, // whether animation should happen only once - while scrolling down
                mirror: false, // whether elements should animate out while scrolling past them
                anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

            });
        }, 500);
    }
</script>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZXV5NJ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header__container">
        <div class="header__mobile">
            <?php
            if ( wp_is_mobile() ) {
                ?>
                <nav class="header__nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'mobile-menu',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
                <?php
            } else {
                ?>
                <nav class="header__nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
                <div class="services__group-list">
                    <a href="<?php echo get_permalink(369); ?>">
                        <h3 class="services__group-title">
                            <?php the_field('tekst_bloka_uslug_stomalogii' , 2)?>
                        </h3>
                    </a>
                    <?php
                    $args = array(
                        'post_type' 	 => 'dentistry'
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <!--                        <a href="--><?php //the_permalink();?><!--" class="services__group-item">--><?php //the_title();?><!--</a>-->
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="services__group-list">
                    <a href="<?php echo get_permalink(447); ?>">
                        <h3 class="services__group-title">
                            <?php the_field('tekst_bloka_uslug_kosmetologii' , 2)?>
                        </h3>
                    </a>
                    <?php
                    $args = array(
                        'post_type' 	 => 'cosmetology'
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <!--                        <a href="--><?php //the_permalink();?><!--" class="services__group-item">--><?php //the_title();?><!--</a>-->
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
            }
            ?>
            <a href="tel:<?php the_field('nomer_telefona', 'option')?>" class="header__button button">
                <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
            </a>
        </div>
        <div class="header__left padding-left-part">
            <div class="header__logo">
                <?php
                if ( is_front_page() && is_home() ) :
                    ?>
                    <a href="<?php echo get_page_link( 102 );?>" rel="home">
                        <span class="mobile">
                            <svg width="52" height="34" viewBox="0 0 52 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3635 14.5789C9.0594 13.7059 7.6193 12.8329 6.75524 11.9599C5.89119 11.0869 5.60319 9.9229 5.60319 8.75889C5.60319 7.30389 6.17922 5.84887 7.04328 4.97587C7.90733 4.10287 9.34743 3.52087 10.7875 3.52087C12.2276 3.52087 13.3797 3.81187 14.5318 4.68487C15.6838 5.55788 16.2598 6.7219 16.8359 8.1769L18.852 6.7219C17.988 4.97589 16.8359 3.52088 15.3958 2.64788C13.6677 1.77487 11.9396 1.19287 9.63542 1.19287C6.75524 1.19287 4.45111 2.06588 2.72301 3.81188C0.994896 5.55789 0.130859 7.88589 0.130859 10.5049C0.130859 12.5419 0.706896 14.2879 1.57095 15.4519C2.72302 16.9069 4.45111 18.0709 7.04328 18.9439C11.6516 20.9809 13.9557 23.3089 13.9557 25.928C13.9557 27.674 13.3797 28.838 12.5156 30.002C11.3635 31.166 10.2115 31.457 8.48337 31.457C7.3313 31.457 6.17923 31.166 5.02716 30.293C3.87509 29.42 3.01101 28.547 2.43497 27.092L0.130859 28.838C1.28293 30.584 2.72301 31.748 4.1631 32.621C5.60319 33.494 7.6193 33.785 9.63542 33.785C12.5156 33.785 15.1078 32.912 17.1239 30.875C19.14 29.129 20.0041 26.8009 20.0041 23.8909C20.0041 21.8539 19.428 20.1079 18.276 18.6529C17.1239 17.4889 14.8198 16.0339 11.3635 14.5789Z" fill="#15223D"/>
                                <path d="M46.162 29.7092C44.4107 30.8737 42.6594 31.456 40.6162 31.456C37.4054 31.456 35.0703 30.2915 33.0271 27.9625C31.2757 25.6335 30.4001 22.14 30.4001 17.7731C30.4001 13.1151 31.2758 9.62158 33.319 7.00145C35.0703 4.38132 37.6973 2.92569 40.908 2.92569C42.9512 2.92569 44.4107 3.50794 45.8701 4.38132C47.3296 5.2547 48.4971 6.71032 49.3728 8.7482L51.416 7.29257C50.2484 5.2547 48.4971 3.50795 46.4539 2.34345C44.4107 1.17895 42.0756 0.59668 39.4486 0.59668C35.0703 0.59668 31.2757 2.05232 28.3568 5.2547C25.438 8.45708 23.9785 12.2417 23.9785 17.1908C23.9785 22.14 25.438 25.9246 28.3568 29.127C31.2757 32.3294 34.7784 33.785 39.1567 33.785C42.0756 33.785 44.7026 33.2027 46.7458 31.7471C49.0809 30.2915 50.5403 28.2536 51.9998 25.6335L49.9565 24.469C49.3728 26.798 47.9133 28.5447 46.162 29.7092Z" fill="#15223D"/>
                            </svg>
                        </span>
                        <span class="desktop">
                            <svg width="215" height="17" viewBox="0 0 215 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48.5062 16.5215H47.0659L53.9442 0.0251852L61.1106 16.5215H57.7674L56.0217 12.2148H50.2257L48.5062 16.5215ZM53.1586 5.28049L50.7058 11.1738H55.6463L53.1586 5.28049ZM3.77086 5.64988C4.19857 6.06123 5.01035 6.54815 6.15383 7.03506C8.03053 7.79062 9.27003 8.57136 9.84613 9.25136C10.431 9.93136 10.7103 10.8548 10.7103 11.9546C10.7103 13.4153 10.1255 14.5822 9.11291 15.556C8.0218 16.4543 6.72993 16.9412 5.14129 16.9412C3.98035 16.9412 3.03764 16.723 2.18221 16.3116C1.39661 15.8163 0.654663 15.1867 0 14.2884L1.29187 13.4573C1.71958 14.1373 2.15602 14.6998 2.73213 15.0607C3.31696 15.4049 3.97162 15.6232 4.60883 15.6232C5.47298 15.6232 6.2062 15.3546 6.78231 14.7921C7.36714 14.2296 7.64646 13.5496 7.64646 12.7269C7.64646 11.3417 6.40697 10.1748 3.8756 9.20099H3.79704C2.4528 8.61333 1.51882 8.05926 0.933986 7.37926C0.357882 6.69086 0.0785595 5.84296 0.0785595 4.81877C0.0785595 3.43358 0.584832 2.24148 1.51882 1.33481C2.4528 0.436543 3.6923 0.0167901 5.28968 0.0167901C6.45061 0.0167901 7.46316 0.285432 8.24875 0.772346C9.11291 1.33481 9.76757 2.01481 10.1953 2.91309L9.10418 3.61827C8.82486 2.86272 8.44952 2.30025 7.86468 1.88889C7.36714 1.48593 6.71248 1.26765 5.92688 1.26765C5.06273 1.26765 4.40806 1.48593 3.90179 2.02321C3.39552 2.51012 3.1162 3.13975 3.1162 3.97086C3.1162 4.60049 3.34315 5.16296 3.77086 5.64988ZM24.755 14.0869C25.2613 13.3314 25.5406 12.0217 25.5406 10.1412H25.6191V0.360988H27.138V10.6785C27.138 12.7437 26.7102 14.3556 25.6977 15.3965C24.6852 16.4459 23.1663 17 21.2198 17C20.3556 17 19.474 16.7817 18.6884 16.5131C17.8243 16.2444 17.1696 15.8331 16.6634 15.2706C16.1571 14.7081 15.7992 14.1541 15.5722 13.4657C15.3453 12.7857 15.2144 11.8622 15.2144 10.6953V0.436543H18.3306V10.1496C18.3306 12.0217 18.5575 13.3398 19.1162 14.0953C19.701 14.8509 20.635 15.2119 21.953 15.2119C23.2362 15.2119 24.1789 14.8677 24.755 14.0869ZM43.5918 9.44444C43.007 8.76444 42.1516 8.20197 40.9819 7.90815C41.9159 7.68988 42.6491 7.27852 43.1554 6.66568C43.6616 6.03605 43.8886 5.34765 43.8886 4.44938C43.8886 3.69383 43.6616 2.98864 43.3038 2.3842C42.9459 1.75457 42.3698 1.26765 41.7064 0.923457C41.3485 0.705185 40.7724 0.579259 40.109 0.512099C39.3758 0.436543 38.5116 0.369383 37.4991 0.369383H32.5149V16.5299H38.468C40.4931 16.5299 42.0119 16.1857 43.0244 15.4805C44.037 14.8005 44.4647 13.6756 44.4647 12.2232C44.5258 11.1235 44.2552 10.2252 43.5918 9.44444ZM35.6922 1.41037H36.9317C38.3021 1.41037 39.3147 1.67901 39.9693 2.16593C40.624 2.65284 40.9819 3.4084 40.9819 4.44938C40.9819 5.56593 40.7026 6.32148 40.1177 6.80839C39.5329 7.29531 38.5989 7.56395 37.2285 7.56395H35.7097V1.41037H35.6922ZM40.5542 14.7249C39.9693 15.2119 38.9568 15.4805 37.6649 15.4805H35.6922V8.54617H37.211C38.6513 8.54617 39.7424 8.89037 40.4756 9.52C41.2088 10.1496 41.5667 11.1235 41.5667 12.4415C41.4882 13.4825 41.2176 14.238 40.5542 14.7249ZM75.2339 7.85778C75.9671 7.17778 76.3948 6.25432 76.3948 5.08741C76.3948 3.55111 75.8885 2.3842 74.7974 1.56148C73.7063 0.805926 72.1177 0.394568 70.014 0.394568H64.5236V16.5551H67.6398V1.41037H68.9316C70.3719 1.41037 71.463 1.67901 72.1962 2.30864C72.9294 2.87111 73.2873 3.76938 73.2873 5.01185C73.2873 6.12839 72.9294 6.88395 72.1962 7.44642C71.463 7.93333 70.2497 8.27753 68.4254 8.42025L72.9033 16.597H76.3686L71.8907 9.02469C73.4183 8.90716 74.5006 8.47062 75.2339 7.85778ZM91.3124 16.5215H80.8814V0.360988H91.3124V1.5279H83.9976V7.48839H90.7275V8.65531H83.9976V15.2538H91.3124V16.5215ZM101.516 11.3921L97.0385 0.369383H93.7739L100.74 16.9412L107.4 0.369383H105.802L101.516 11.3921ZM109.137 16.5215H107.618L114.557 0.0251852L121.724 16.5215H118.38L116.635 12.2148H110.839L109.137 16.5215ZM113.772 5.28049L111.319 11.1738H116.259L113.772 5.28049ZM146.627 12.0973C146.042 13.2642 145.335 14.1205 144.454 14.7249C143.589 15.3546 142.577 15.6232 141.416 15.6232C139.749 15.6232 138.378 14.9936 137.444 13.7511C136.51 12.5086 136.074 10.7793 136.074 8.54617C136.074 6.26272 136.58 4.38222 137.514 3.07259C138.527 1.75457 139.845 1.04938 141.486 1.04938C142.498 1.04938 143.362 1.31802 144.165 1.80494C144.951 2.29185 145.606 3.04741 146.112 4.02123L147.125 3.34123C146.47 2.22469 145.606 1.39358 144.515 0.831111C143.511 0.268642 142.271 0 140.831 0C138.5 0 136.554 0.831111 134.957 2.43457C133.359 4.03802 132.626 6.03605 132.626 8.47062C132.626 10.9807 133.412 12.9704 134.957 14.5822C136.475 16.1857 138.422 16.9412 140.753 16.9412C142.271 16.9412 143.642 16.597 144.803 15.8247C145.964 15.0691 146.906 14.0198 147.561 12.7101L146.627 12.0973ZM154.675 15.2874H161.911V16.5299H151.48V0.360988H154.666V15.2874H154.675ZM168.301 0.360988H165.185V16.5215H168.301V0.360988ZM176.75 0.360988L185.435 11.5348V0.360988H186.954V16.5215H185.435L175.362 3.62667V16.5215H173.844V0.360988H176.75ZM195.744 0.360988H192.628V16.5215H195.744V0.360988ZM211.893 14.7249C212.757 14.0953 213.49 13.2642 214.066 12.0973L215 12.7269C214.345 14.0449 213.403 15.0859 212.242 15.8415C211.081 16.597 209.71 16.958 208.192 16.958C205.861 16.958 203.914 16.2025 202.396 14.599C200.877 12.9956 200.065 10.9975 200.065 8.48741C200.065 6.05284 200.798 4.05481 202.396 2.45136C203.993 0.847901 205.939 0.0167901 208.27 0.0167901C209.71 0.0167901 210.95 0.285432 211.962 0.847901C213.053 1.41037 213.909 2.23309 214.572 3.35802L213.56 4.03802C213.053 3.0642 212.399 2.30864 211.613 1.82173C210.828 1.33481 209.946 1.06617 208.933 1.06617C207.266 1.06617 205.974 1.74617 204.962 3.08938C204.028 4.40741 203.522 6.27951 203.522 8.56296C203.522 10.7793 203.949 12.5086 204.892 13.7679C205.826 15.0104 207.223 15.64 208.864 15.64C209.99 15.6232 211.002 15.3294 211.893 14.7249Z" fill="#25303B"/>
                            </svg>
                        </span>
                    </a>
                <?php
                else :
                    ?>
                    <a href="<?php echo get_page_link( 102 );?>" rel="home">
                        <a href="<?php echo get_page_link( 102 );?>" rel="home">
                        <span class="mobile">
                            <svg width="52" height="34" viewBox="0 0 52 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3635 14.5789C9.0594 13.7059 7.6193 12.8329 6.75524 11.9599C5.89119 11.0869 5.60319 9.9229 5.60319 8.75889C5.60319 7.30389 6.17922 5.84887 7.04328 4.97587C7.90733 4.10287 9.34743 3.52087 10.7875 3.52087C12.2276 3.52087 13.3797 3.81187 14.5318 4.68487C15.6838 5.55788 16.2598 6.7219 16.8359 8.1769L18.852 6.7219C17.988 4.97589 16.8359 3.52088 15.3958 2.64788C13.6677 1.77487 11.9396 1.19287 9.63542 1.19287C6.75524 1.19287 4.45111 2.06588 2.72301 3.81188C0.994896 5.55789 0.130859 7.88589 0.130859 10.5049C0.130859 12.5419 0.706896 14.2879 1.57095 15.4519C2.72302 16.9069 4.45111 18.0709 7.04328 18.9439C11.6516 20.9809 13.9557 23.3089 13.9557 25.928C13.9557 27.674 13.3797 28.838 12.5156 30.002C11.3635 31.166 10.2115 31.457 8.48337 31.457C7.3313 31.457 6.17923 31.166 5.02716 30.293C3.87509 29.42 3.01101 28.547 2.43497 27.092L0.130859 28.838C1.28293 30.584 2.72301 31.748 4.1631 32.621C5.60319 33.494 7.6193 33.785 9.63542 33.785C12.5156 33.785 15.1078 32.912 17.1239 30.875C19.14 29.129 20.0041 26.8009 20.0041 23.8909C20.0041 21.8539 19.428 20.1079 18.276 18.6529C17.1239 17.4889 14.8198 16.0339 11.3635 14.5789Z" fill="#15223D"/>
                                <path d="M46.162 29.7092C44.4107 30.8737 42.6594 31.456 40.6162 31.456C37.4054 31.456 35.0703 30.2915 33.0271 27.9625C31.2757 25.6335 30.4001 22.14 30.4001 17.7731C30.4001 13.1151 31.2758 9.62158 33.319 7.00145C35.0703 4.38132 37.6973 2.92569 40.908 2.92569C42.9512 2.92569 44.4107 3.50794 45.8701 4.38132C47.3296 5.2547 48.4971 6.71032 49.3728 8.7482L51.416 7.29257C50.2484 5.2547 48.4971 3.50795 46.4539 2.34345C44.4107 1.17895 42.0756 0.59668 39.4486 0.59668C35.0703 0.59668 31.2757 2.05232 28.3568 5.2547C25.438 8.45708 23.9785 12.2417 23.9785 17.1908C23.9785 22.14 25.438 25.9246 28.3568 29.127C31.2757 32.3294 34.7784 33.785 39.1567 33.785C42.0756 33.785 44.7026 33.2027 46.7458 31.7471C49.0809 30.2915 50.5403 28.2536 51.9998 25.6335L49.9565 24.469C49.3728 26.798 47.9133 28.5447 46.162 29.7092Z" fill="#15223D"/>
                            </svg>
                        </span>
                            <span class="desktop">
                            <svg width="215" height="17" viewBox="0 0 215 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48.5062 16.5215H47.0659L53.9442 0.0251852L61.1106 16.5215H57.7674L56.0217 12.2148H50.2257L48.5062 16.5215ZM53.1586 5.28049L50.7058 11.1738H55.6463L53.1586 5.28049ZM3.77086 5.64988C4.19857 6.06123 5.01035 6.54815 6.15383 7.03506C8.03053 7.79062 9.27003 8.57136 9.84613 9.25136C10.431 9.93136 10.7103 10.8548 10.7103 11.9546C10.7103 13.4153 10.1255 14.5822 9.11291 15.556C8.0218 16.4543 6.72993 16.9412 5.14129 16.9412C3.98035 16.9412 3.03764 16.723 2.18221 16.3116C1.39661 15.8163 0.654663 15.1867 0 14.2884L1.29187 13.4573C1.71958 14.1373 2.15602 14.6998 2.73213 15.0607C3.31696 15.4049 3.97162 15.6232 4.60883 15.6232C5.47298 15.6232 6.2062 15.3546 6.78231 14.7921C7.36714 14.2296 7.64646 13.5496 7.64646 12.7269C7.64646 11.3417 6.40697 10.1748 3.8756 9.20099H3.79704C2.4528 8.61333 1.51882 8.05926 0.933986 7.37926C0.357882 6.69086 0.0785595 5.84296 0.0785595 4.81877C0.0785595 3.43358 0.584832 2.24148 1.51882 1.33481C2.4528 0.436543 3.6923 0.0167901 5.28968 0.0167901C6.45061 0.0167901 7.46316 0.285432 8.24875 0.772346C9.11291 1.33481 9.76757 2.01481 10.1953 2.91309L9.10418 3.61827C8.82486 2.86272 8.44952 2.30025 7.86468 1.88889C7.36714 1.48593 6.71248 1.26765 5.92688 1.26765C5.06273 1.26765 4.40806 1.48593 3.90179 2.02321C3.39552 2.51012 3.1162 3.13975 3.1162 3.97086C3.1162 4.60049 3.34315 5.16296 3.77086 5.64988ZM24.755 14.0869C25.2613 13.3314 25.5406 12.0217 25.5406 10.1412H25.6191V0.360988H27.138V10.6785C27.138 12.7437 26.7102 14.3556 25.6977 15.3965C24.6852 16.4459 23.1663 17 21.2198 17C20.3556 17 19.474 16.7817 18.6884 16.5131C17.8243 16.2444 17.1696 15.8331 16.6634 15.2706C16.1571 14.7081 15.7992 14.1541 15.5722 13.4657C15.3453 12.7857 15.2144 11.8622 15.2144 10.6953V0.436543H18.3306V10.1496C18.3306 12.0217 18.5575 13.3398 19.1162 14.0953C19.701 14.8509 20.635 15.2119 21.953 15.2119C23.2362 15.2119 24.1789 14.8677 24.755 14.0869ZM43.5918 9.44444C43.007 8.76444 42.1516 8.20197 40.9819 7.90815C41.9159 7.68988 42.6491 7.27852 43.1554 6.66568C43.6616 6.03605 43.8886 5.34765 43.8886 4.44938C43.8886 3.69383 43.6616 2.98864 43.3038 2.3842C42.9459 1.75457 42.3698 1.26765 41.7064 0.923457C41.3485 0.705185 40.7724 0.579259 40.109 0.512099C39.3758 0.436543 38.5116 0.369383 37.4991 0.369383H32.5149V16.5299H38.468C40.4931 16.5299 42.0119 16.1857 43.0244 15.4805C44.037 14.8005 44.4647 13.6756 44.4647 12.2232C44.5258 11.1235 44.2552 10.2252 43.5918 9.44444ZM35.6922 1.41037H36.9317C38.3021 1.41037 39.3147 1.67901 39.9693 2.16593C40.624 2.65284 40.9819 3.4084 40.9819 4.44938C40.9819 5.56593 40.7026 6.32148 40.1177 6.80839C39.5329 7.29531 38.5989 7.56395 37.2285 7.56395H35.7097V1.41037H35.6922ZM40.5542 14.7249C39.9693 15.2119 38.9568 15.4805 37.6649 15.4805H35.6922V8.54617H37.211C38.6513 8.54617 39.7424 8.89037 40.4756 9.52C41.2088 10.1496 41.5667 11.1235 41.5667 12.4415C41.4882 13.4825 41.2176 14.238 40.5542 14.7249ZM75.2339 7.85778C75.9671 7.17778 76.3948 6.25432 76.3948 5.08741C76.3948 3.55111 75.8885 2.3842 74.7974 1.56148C73.7063 0.805926 72.1177 0.394568 70.014 0.394568H64.5236V16.5551H67.6398V1.41037H68.9316C70.3719 1.41037 71.463 1.67901 72.1962 2.30864C72.9294 2.87111 73.2873 3.76938 73.2873 5.01185C73.2873 6.12839 72.9294 6.88395 72.1962 7.44642C71.463 7.93333 70.2497 8.27753 68.4254 8.42025L72.9033 16.597H76.3686L71.8907 9.02469C73.4183 8.90716 74.5006 8.47062 75.2339 7.85778ZM91.3124 16.5215H80.8814V0.360988H91.3124V1.5279H83.9976V7.48839H90.7275V8.65531H83.9976V15.2538H91.3124V16.5215ZM101.516 11.3921L97.0385 0.369383H93.7739L100.74 16.9412L107.4 0.369383H105.802L101.516 11.3921ZM109.137 16.5215H107.618L114.557 0.0251852L121.724 16.5215H118.38L116.635 12.2148H110.839L109.137 16.5215ZM113.772 5.28049L111.319 11.1738H116.259L113.772 5.28049ZM146.627 12.0973C146.042 13.2642 145.335 14.1205 144.454 14.7249C143.589 15.3546 142.577 15.6232 141.416 15.6232C139.749 15.6232 138.378 14.9936 137.444 13.7511C136.51 12.5086 136.074 10.7793 136.074 8.54617C136.074 6.26272 136.58 4.38222 137.514 3.07259C138.527 1.75457 139.845 1.04938 141.486 1.04938C142.498 1.04938 143.362 1.31802 144.165 1.80494C144.951 2.29185 145.606 3.04741 146.112 4.02123L147.125 3.34123C146.47 2.22469 145.606 1.39358 144.515 0.831111C143.511 0.268642 142.271 0 140.831 0C138.5 0 136.554 0.831111 134.957 2.43457C133.359 4.03802 132.626 6.03605 132.626 8.47062C132.626 10.9807 133.412 12.9704 134.957 14.5822C136.475 16.1857 138.422 16.9412 140.753 16.9412C142.271 16.9412 143.642 16.597 144.803 15.8247C145.964 15.0691 146.906 14.0198 147.561 12.7101L146.627 12.0973ZM154.675 15.2874H161.911V16.5299H151.48V0.360988H154.666V15.2874H154.675ZM168.301 0.360988H165.185V16.5215H168.301V0.360988ZM176.75 0.360988L185.435 11.5348V0.360988H186.954V16.5215H185.435L175.362 3.62667V16.5215H173.844V0.360988H176.75ZM195.744 0.360988H192.628V16.5215H195.744V0.360988ZM211.893 14.7249C212.757 14.0953 213.49 13.2642 214.066 12.0973L215 12.7269C214.345 14.0449 213.403 15.0859 212.242 15.8415C211.081 16.597 209.71 16.958 208.192 16.958C205.861 16.958 203.914 16.2025 202.396 14.599C200.877 12.9956 200.065 10.9975 200.065 8.48741C200.065 6.05284 200.798 4.05481 202.396 2.45136C203.993 0.847901 205.939 0.0167901 208.27 0.0167901C209.71 0.0167901 210.95 0.285432 211.962 0.847901C213.053 1.41037 213.909 2.23309 214.572 3.35802L213.56 4.03802C213.053 3.0642 212.399 2.30864 211.613 1.82173C210.828 1.33481 209.946 1.06617 208.933 1.06617C207.266 1.06617 205.974 1.74617 204.962 3.08938C204.028 4.40741 203.522 6.27951 203.522 8.56296C203.522 10.7793 203.949 12.5086 204.892 13.7679C205.826 15.0104 207.223 15.64 208.864 15.64C209.99 15.6232 211.002 15.3294 211.893 14.7249Z" fill="#25303B"/>
                            </svg>
                        </span>
                        </a>
                    </a>
                <?php
                endif;
                ?>
            </div>
            <nav class="header__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav>
        </div>
        <div class="header__right">
            <?php
            if ( wp_is_mobile() ) {
                ?>
                <a href="tel:<?php the_field('nomer_telefona', 'option')?>" class="header__button button">
                    <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
                </a>
                <?php
            } else {
                ?>
                <div class="header__button button js-form">
                    <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
                </div>
                <?php
            }
            ?>
            <div class="header__phone">
                <a href="tel:<?php the_field('nomer_telefona', 'option')?>"><?php the_field('nomer_telefona', 'option')?></a>
            </div>
            <div class="header__language">
                <?php
                qtranxf_generateLanguageSelectCode('short');
                ?>
            </div>
            <div class="header__burger js-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<div class="header__nav-absolute">
    <div class="nav-header">
        <div class="main-container">
            <div class="nav-header-item">
                <a href="<?php echo get_permalink(369); ?>">
                    <?php the_field('tekst_stomatologiya', 'option')?>
                </a>
            </div>
            <div class="nav-header-item">
                <a href="<?php echo get_permalink(447); ?>">
                    <?php the_field('tekst_kosmetologiya', 'option')?>
                </a>
            </div>
        </div>
    </div>
<!--    <div class="nav-content main-container">-->
<!--        <div class="left">-->
<!--            --><?php
//            $args = array(
//                'post_type' 	 => 'dentistry'
//            );
//            $MY_QUERY = new WP_Query( $args );
//            if ( $MY_QUERY->have_posts() ) :
//                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
<!--                    <div class="row">-->
<!--                        <a href="--><?php //the_permalink();?><!--">--><?php //the_title();?><!--</a>-->
<!--                    </div>-->
<!--                --><?php //endwhile;
//            endif;
//            wp_reset_postdata();
//            ?>
<!--        </div>-->
<!--        <div class="right">-->
<!--            --><?php
//            $args = array(
//                'post_type' 	 => 'cosmetology'
//            );
//            $MY_QUERY = new WP_Query( $args );
//            if ( $MY_QUERY->have_posts() ) :
//                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
<!--                    <div class="row">-->
<!--                        <a href="--><?php //the_permalink();?><!--">--><?php //the_title();?><!--</a>-->
<!--                    </div>-->
<!--                --><?php //endwhile;
//            endif;
//            wp_reset_postdata();
//            ?>
<!--        </div>-->
<!--    </div>-->
</div>

