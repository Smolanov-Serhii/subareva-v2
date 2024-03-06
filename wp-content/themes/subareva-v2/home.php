<?php
/**
Template Name: Стоматология
 */


get_header();

?>
    <!-- Meta Pixel Code -->
<!--    <script>-->
<!--        !function(f,b,e,v,n,t,s)-->
<!--        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?-->
<!--            n.callMethod.apply(n,arguments):n.queue.push(arguments)};-->
<!--            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';-->
<!--            n.queue=[];t=b.createElement(e);t.async=!0;-->
<!--            t.src=v;s=b.getElementsByTagName(e)[0];-->
<!--            s.parentNode.insertBefore(t,s)}(window, document,'script',-->
<!--            'https://connect.facebook.net/en_US/fbevents.js');-->
<!--        fbq('init', '676280260679080');-->
<!--        fbq('track', 'PageView');-->
<!--    </script>-->
<!--    <noscript><img height="1" width="1" style="display:none"-->
<!--                   src="https://www.facebook.com/tr?id=676280260679080&ev=PageView&noscript=1"-->
<!--        /></noscript>-->
    <!-- End Meta Pixel Code -->
    <main id="main" class="main">
        <section class="banner-dark white">
            <div class="banner-dark__img">

                <?php
                $currentLang = $GLOBALS['q_config']['language'];
                if ( wp_is_mobile() ) {
                    ?>
                    <img src="<?php echo get_template_directory_uri() . "/img/wooman-day-mob.png";?>" alt="wooman-day-mob">
                    <?php
                } else {
                    ?>
                    <img src="<?php echo get_template_directory_uri() . "/img/wooman-day-pc.png";?>" alt="wooman-day-pc">
                    <?php
                }
                ?>

            </div>
            <div class="banner-dark__container main-container">
                <h1 class="banner-dark__title white">
                    <?php
//                    echo $currentLang;
                        if ($currentLang == "ua"){
                            ?>
                            -25% на план<br>
                            стоматологічного<br>
                            лікування
                            <?php
                        } else {
                            ?>
                            -25% на план<br>
                            стоматологического<br>
                            лечения
                            <?php
                        }
                    ?>
                </h1>
                <div class="banner-dark__subtitle white">
                    <?php
                    if ($currentLang == "ua"){
                        ?>
                        до 8 березня
                        <?php
                    } else {
                        ?>
                        к 8 марта
                        <?php
                    }
                    ?>

                </div>
                <div class="banner-dark__lnk button js-form">
                    <span><?php the_field('tekst_na_knopke', 544)?></span>
                </div>
            </div>
        </section>
<!--        --><?php //get_template_part( 'template-parts/content', 'banner-main' ); ?>
        <?php get_template_part( 'template-parts/content', 'digits' ); ?>
        <?php get_template_part( 'template-parts/content', 'services-big' ); ?>
        <?php get_template_part( 'template-parts/content', 'services-animate' ); ?>
        <?php get_template_part( 'template-parts/content', 'dent' ); ?>
        <?php get_template_part( 'template-parts/content', 'waranty' ); ?>
        <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
    </main>
<?php

get_footer();