<?php
/**
Template Name: Главная
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
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=676280260679080&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'digits' ); ?>
        <?php get_template_part( 'template-parts/content', 'video' ); ?>
        <?php
        if ( wp_is_mobile() ) {
            get_template_part( 'template-parts/content', 'params' );
        }
        ?>
        <?php get_template_part( 'template-parts/content', 'about' ); ?>
        <?php get_template_part( 'template-parts/content', 'services' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
    </main>
<?php

get_footer();