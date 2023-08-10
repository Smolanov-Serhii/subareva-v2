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
	<?php wp_head(); ?>
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
        <div class="header__left padding-left-part">
            <div class="header__logo">
                <?php
                if ( is_front_page() && is_home() ) :
                    ?>
                    <a href="<?php echo get_page_link( 2 );?>" rel="home">
                        <?php
                        the_custom_logo();
                        ?>
                    </a>
                <?php
                else :
                    ?>
                    <a href="<?php echo get_page_link( 2 );?>" rel="home">
                        <?php
                        the_custom_logo();
                        ?>
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
            <a href="tel:<?php the_field('nomer_telefona', 'option')?>" class="header__button button">
                <span><?php the_field('tekst_zapisatsya_na_priem', 'option')?></span>
            </a>
            <div class="header__phone">
                <a href="tel:<?php the_field('nomer_telefona', 'option')?>"><?php the_field('nomer_telefona', 'option')?></a>
            </div>
            <?php
            /** Переключалка языков **/
            if ( current_user_can( 'administrator' ) ) {
                ?>
                <div class="header__language">
                    <?php
                    qtranxf_generateLanguageSelectCode('short');
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</header>
<div class="header__nav-absolute">
    <div class="nav-header">
        <div class="main-container">
            <div class="nav-header-item">
                <?php the_field('tekst_stomatologiya', 'option')?>
            </div>
            <div class="nav-header-item">
                <?php the_field('tekst_kosmetologiya', 'option')?>
            </div>
        </div>
    </div>
    <div class="nav-content main-container">
        <div class="left">
            <?php
            $args = array(
                'post_type' 	 => 'dentistry'
            );
            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                    <div class="row">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="right">
            <?php
            $args = array(
                'post_type' 	 => 'cosmetology'
            );
            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                    <div class="row">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

