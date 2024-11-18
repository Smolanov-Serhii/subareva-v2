<?php
/**
Template Name: Вакансии
 */


get_header();
$post_id = get_the_ID();

?>
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'about-banner' ); ?>
        <section class="vacancies main-container tabs-elements">
            <div class="vacancies__header">
                <h2 class="vacancies__title section-title">
                    <?php the_field('zagolovok_bloka_vakansii', $post_id)?>
                </h2>
                <div class="vacancies__tabs">
                    <div class="vacancies__tabs-item tabs-nav-item active">
                        <?php the_field('nadpis_robota_v_klinike', 'option')?>

                    </div>
                    <div class="vacancies__tabs-item tabs-nav-item">
                        <?php the_field('nadpis_rabota_v_offise', 'option')?>
                    </div>
                </div>
            </div>

            <div class="vacancies__list ">
                <div class="vacancies__list-group tabs-content-item">
                    <?php
                    $counter = 1;
                    $args = array(
                        'post_type' 	 => 'vacancy',
                        'posts_per_page' => - 1,
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <?php
                            $post_idin = get_the_ID();
                            $cat = get_field('mesto_raboty', $post_idin);
                            if($cat == 'clinic'){
                                ?>
                                <div class="vacancies__list-item">
                                    <h3 class="vacancies__list-title">
                                        <?php the_title();?>
                                    </h3>
                                    <div class="vacancies__list-desc">
                                        <?php the_field('kratkoe_opisanie_vakansii', $post_idin)?>
                                    </div>
                                    <a href="<?php the_permalink();?>" class="vacancies__list-lnk"><?php the_field('tekst_detalnej', 'option')?></a>
                                </div>
                                <?php
                                $counter++;
                            }
                            endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                        if ($counter > 6){
                            ?>
                            <div class="vacancies__list-more">
                                <div class="wrap">
                                    <?php the_field('nadpis_pokazati_bilshe_vakansij', 'option')?>

                                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.08594 0.977539L7.0332 6.9248L12.9805 0.977539" stroke="#273A5E" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                </div>
                <div class="vacancies__list-group tabs-content-item" style="display: none;">
                    <?php
                    $counter = 1;
                    $args = array(
                        'post_type' 	 => 'vacancy',
                        'posts_per_page' => - 1,
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <?php
                            $post_idin = get_the_ID();
                            $cat = get_field('mesto_raboty', $post_idin);
                            if($cat == 'office'){
                                ?>
                                <div class="vacancies__list-item">
                                    <h3 class="vacancies__list-title">
                                        <?php the_title();?>
                                    </h3>
                                    <div class="vacancies__list-desc">
                                        <?php the_field('kratkoe_opisanie_vakansii', $post_idin)?>
                                    </div>
                                    <a href="<?php the_permalink();?>" class="vacancies__list-lnk"><?php the_field('tekst_detalnej', 'option')?></a>
                                </div>
                                <?php
                                $counter++;
                            }

                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    if ($counter > 6){
                        ?>
                        <div class="vacancies__list-more">
                            <div class="wrap">
                                <?php the_field('nadpis_pokazati_bilshe_vakansij', 'option')?>

                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.08594 0.977539L7.0332 6.9248L12.9805 0.977539" stroke="#273A5E" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </section>
        <section class="appointment-new">
            <div class="appointment-new__container main-container">
                <div class="appointment-new__content">
                    <h2 class="appointment-new__title">
                        <?php the_field('zagolovok_bloka_podpiski' , $post_id)?>
                    </h2>
                </div>
                <div class="appointment-new__buttons">
                    <a href="https://www.instagram.com/subareva_clinic/?igsh=bmZzZGdmcGY3ZzFw" class="button button-white">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9416 17.9512H4.23013C2.22678 17.9512 0.585938 16.361 0.585938 14.4111V4.49126C0.585938 2.54137 2.22678 0.951172 4.23013 0.951172H13.9416C15.9449 0.951172 17.5858 2.54137 17.5858 4.49126V14.4111C17.6049 16.361 15.964 17.9512 13.9416 17.9512ZM4.23013 2.40886C3.02812 2.40886 2.05506 3.33647 2.05506 4.49126V14.4111C2.05506 15.5659 3.02812 16.4935 4.23013 16.4935H13.9416C15.1436 16.4935 16.1166 15.5659 16.1166 14.4111V4.49126C16.1166 3.33647 15.1436 2.40886 13.9416 2.40886H4.23013Z" fill="#000125"/>
                            <path d="M9.09396 13.8619C6.6327 13.8619 4.64844 11.8741 4.64844 9.45095C4.64844 7.00886 6.65178 5.04004 9.09396 5.04004C11.5552 5.04004 13.5395 7.02779 13.5395 9.45095C13.5395 11.8741 11.5361 13.8619 9.09396 13.8619ZM9.09396 6.49772C7.45312 6.49772 6.11755 7.82289 6.11755 9.45095C6.11755 11.079 7.45312 12.4042 9.09396 12.4042C10.7348 12.4042 12.0704 11.079 12.0704 9.45095C12.0704 7.82289 10.7348 6.49772 9.09396 6.49772Z" fill="#000125"/>
                            <path d="M14.8956 4.81269C14.8956 5.38062 14.4377 5.85389 13.8462 5.85389C13.2739 5.85389 12.7969 5.39955 12.7969 4.81269C12.7969 4.24476 13.2548 3.77148 13.8462 3.77148C14.4377 3.77148 14.8956 4.24476 14.8956 4.81269Z" fill="#000125"/>
                        </svg>
                        <span><?php the_field('nadpis_na_knopke_instagramm', $post_id)?></span>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61556572155925" class="button button-white">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6006_185)">
                                <path d="M9.61813 5.26329C9.61813 4.25751 10.4536 4.4099 10.4536 4.4099H13.1091V1.39258H9.14073C6.12716 1.39258 6.05256 4.77564 6.05256 4.77564V7.07673V7.09197H4.33691V9.85023H6.05256V18.3079H9.63305V9.85023H12.6615L13.124 7.03101L9.63305 7.06149V7.03101C9.61813 7.03101 9.61813 6.26906 9.61813 5.26329Z" fill="#000125"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_6006_185">
                                    <rect width="17" height="17" fill="white" transform="translate(0.0859375 0.951172)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span><?php the_field('nadpis_na_knopke_fejstbuk', $post_id)?></span>
                    </a>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'params' ); ?>
        <section class="grid-photo">
            <div class="grid-photo__container main-container">
                <h2 class="grid-photo__title section-title">
                    <?php the_field('zagolovok_bloka_foto', $post_id)?>
                </h2>
                <div class="grid-photo__list">
                    <?php
                    if( have_rows('perechen_fotografij_bloka_foto' , $post_id )):
                        while( have_rows('perechen_fotografij_bloka_foto' , $post_id ) ) : the_row();
                            $img = get_sub_field('fotografiya_dlya_bloka_foto');
                                ?>
                                <div class="grid-photo__item">
                                    <img src="<?php echo $img; ?>" alt="">
                                </div>
                                <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="rev-new">
            <div class="rev-new__container main-container">
                <h2 class="rev-new__title section-title">
                    <?php the_field('zagolovok_bloka_otzyvy_vakansii', $post_id)?>
                </h2>
                <div class="rev-new__list">
                    <div class="rev-new__container swiper">
                        <div class="rev-new__wrapper swiper-wrapper">
                            <?php
                            if( have_rows('otzyvy_vakansii' , $post_id )):
                                while( have_rows('otzyvy_vakansii' , $post_id ) ) : the_row();
                                    $img = get_sub_field('fotografiya');
                                    $name = get_sub_field('fio');
                                    $work = get_sub_field('dolzhnost');
                                    $desc = get_sub_field('otzyv');
                                    ?>
                                    <div class="rev-new__slide swiper-slide">
                                        <div class="rev-new__dec-left">
                                            <svg width="94" height="75" viewBox="0 0 94 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M40.1101 0.695312L25.722 53.0153L20.926 33.3953C27.1754 33.3953 32.2621 35.212 36.1861 38.8453C40.1101 42.4786 42.0721 47.4926 42.0721 53.8873C42.0721 60.1367 40.0374 65.2233 35.9681 69.1473C32.0441 72.926 27.1027 74.8153 21.144 74.8153C15.04 74.8153 9.95338 72.926 5.88405 69.1473C1.96005 65.2233 -0.00195312 60.1367 -0.00195312 53.8873C-0.00195312 51.998 0.143381 50.1813 0.434047 48.4373C0.724714 46.548 1.30605 44.368 2.17805 41.8973C3.05005 39.4266 4.28538 36.1566 5.88405 32.0873L18.528 0.695312H40.1101ZM91.5581 0.695312L77.17 53.0153L72.374 33.3953C78.6234 33.3953 83.71 35.212 87.634 38.8453C91.558 42.4786 93.5201 47.4926 93.5201 53.8873C93.5201 60.1367 91.4854 65.2233 87.4161 69.1473C83.4921 72.926 78.5507 74.8153 72.592 74.8153C66.488 74.8153 61.4014 72.926 57.3321 69.1473C53.408 65.2233 51.446 60.1367 51.446 53.8873C51.446 51.998 51.5914 50.1813 51.882 48.4373C52.1727 46.548 52.7541 44.368 53.626 41.8973C54.4981 39.4266 55.7334 36.1566 57.3321 32.0873L69.9761 0.695312H91.5581Z" fill="#F6F6F6"/>
                                            </svg>
                                        </div>
                                        <div class="rev-new__dec-right">
                                            <svg width="95" height="75" viewBox="0 0 95 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M54.0623 0.195312L68.4503 52.5153L73.2463 32.8953C66.997 32.8953 61.9103 34.712 57.9863 38.3453C54.0623 41.9786 52.1003 46.9926 52.1003 53.3873C52.1003 59.6367 54.135 64.7233 58.2043 68.6473C62.1283 72.426 67.0697 74.3153 73.0283 74.3153C79.1323 74.3153 84.219 72.426 88.2883 68.6473C92.2123 64.7233 94.1743 59.6367 94.1743 53.3873C94.1743 51.498 94.029 49.6813 93.7383 47.9373C93.4477 46.048 92.8663 43.868 91.9943 41.3973C91.1223 38.9266 89.887 35.6566 88.2883 31.5873L75.6443 0.195312H54.0623ZM2.61434 0.195312L17.0023 52.5153L21.7983 32.8953C15.549 32.8953 10.4623 34.712 6.53835 38.3453C2.61434 41.9786 0.652344 46.9926 0.652344 53.3873C0.652344 59.6367 2.68701 64.7233 6.75634 68.6473C10.6803 72.426 15.6217 74.3153 21.5803 74.3153C27.6843 74.3153 32.771 72.426 36.8403 68.6473C40.7643 64.7233 42.7263 59.6367 42.7263 53.3873C42.7263 51.498 42.581 49.6813 42.2903 47.9373C41.9997 46.048 41.4183 43.868 40.5463 41.3973C39.6743 38.9266 38.439 35.6566 36.8403 31.5873L24.1963 0.195312H2.61434Z" fill="#F6F6F6"/>
                                            </svg>
                                        </div>
                                        <div class="rev-new__desc">
                                            <?php echo $desc; ?>
                                        </div>
                                        <div class="rev-new__pers">
                                            <div class="rev-new__photo">
                                                <img src="<?php echo $img; ?>" alt="<?php echo $name; ?> | <?php echo $work; ?>">
                                            </div>
                                            <div class="rev-new__name">
                                                <div class="name"><?php echo $name; ?></div>
                                                <div class="work"><?php echo $work; ?></div>
                                            </div>
                                        </div>

                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="faq__container main-container">
                <div class="faq__text">
                    <h2 class="faq__title section-title">
                        <?php the_field('zagolovok_bloka_voprosy_i_otvety', $post_id)?>
                    </h2>
                    <div class="faq__list">
                        <?php
                        if( have_rows('perechen_voproov_i_otvetov' , $post_id )):
                            while( have_rows('perechen_voproov_i_otvetov' , $post_id ) ) : the_row();
                                $header = get_sub_field('vopros');
                                $desc = get_sub_field('otvet');
                                ?>
                                <div class="faq__item">
                                    <div class="faq__item-header">
                                        <?php echo $header; ?>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6972 9.34005V0.451172H9.47493V9.34005H0.585938V11.5623H9.47493V20.4512H11.6972V11.5623H20.5859V9.34005H11.6972Z" fill="#000125"/>
                                        </svg>
                                    </div>
                                    <div class="faq__item-desc"><?php echo $desc; ?></div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="faq__img">
                    <img src="<?php the_field('tzoyurazhenie_bloka_voprosy_i_otvety', $post_id)?>" alt="<?php the_field('zagolovok_bloka_voprosy_i_otvety', $post_id)?>">
                </div>
            </div>
        </section>
        <section class="appointment-new">
            <div class="appointment-new__container main-container">
                <div class="appointment-new__content">
                    <h2 class="appointment-new__title">
                        <?php the_field('zagolovok_bloka_podpiski' , $post_id)?>
                    </h2>
                </div>
                <div class="appointment-new__buttons">
                    <a href="https://www.instagram.com/subareva_clinic/?igsh=bmZzZGdmcGY3ZzFw" class="button button-white">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.9416 17.9512H4.23013C2.22678 17.9512 0.585938 16.361 0.585938 14.4111V4.49126C0.585938 2.54137 2.22678 0.951172 4.23013 0.951172H13.9416C15.9449 0.951172 17.5858 2.54137 17.5858 4.49126V14.4111C17.6049 16.361 15.964 17.9512 13.9416 17.9512ZM4.23013 2.40886C3.02812 2.40886 2.05506 3.33647 2.05506 4.49126V14.4111C2.05506 15.5659 3.02812 16.4935 4.23013 16.4935H13.9416C15.1436 16.4935 16.1166 15.5659 16.1166 14.4111V4.49126C16.1166 3.33647 15.1436 2.40886 13.9416 2.40886H4.23013Z" fill="#000125"/>
                            <path d="M9.09396 13.8619C6.6327 13.8619 4.64844 11.8741 4.64844 9.45095C4.64844 7.00886 6.65178 5.04004 9.09396 5.04004C11.5552 5.04004 13.5395 7.02779 13.5395 9.45095C13.5395 11.8741 11.5361 13.8619 9.09396 13.8619ZM9.09396 6.49772C7.45312 6.49772 6.11755 7.82289 6.11755 9.45095C6.11755 11.079 7.45312 12.4042 9.09396 12.4042C10.7348 12.4042 12.0704 11.079 12.0704 9.45095C12.0704 7.82289 10.7348 6.49772 9.09396 6.49772Z" fill="#000125"/>
                            <path d="M14.8956 4.81269C14.8956 5.38062 14.4377 5.85389 13.8462 5.85389C13.2739 5.85389 12.7969 5.39955 12.7969 4.81269C12.7969 4.24476 13.2548 3.77148 13.8462 3.77148C14.4377 3.77148 14.8956 4.24476 14.8956 4.81269Z" fill="#000125"/>
                        </svg>
                        <span><?php the_field('nadpis_na_knopke_instagramm', $post_id)?></span>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61556572155925" class="button button-white">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6006_185)">
                                <path d="M9.61813 5.26329C9.61813 4.25751 10.4536 4.4099 10.4536 4.4099H13.1091V1.39258H9.14073C6.12716 1.39258 6.05256 4.77564 6.05256 4.77564V7.07673V7.09197H4.33691V9.85023H6.05256V18.3079H9.63305V9.85023H12.6615L13.124 7.03101L9.63305 7.06149V7.03101C9.61813 7.03101 9.61813 6.26906 9.61813 5.26329Z" fill="#000125"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_6006_185">
                                    <rect width="17" height="17" fill="white" transform="translate(0.0859375 0.951172)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span><?php the_field('nadpis_na_knopke_fejstbuk', $post_id)?></span>
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php

get_footer();