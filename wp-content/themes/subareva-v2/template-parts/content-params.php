<?php
if (is_page(1136)){
    $post_id = 102;
} else {
    $post_id = get_the_ID();
}

?>
<section class="params <?php if (get_field('kak_otobrazit_blok' , $post_id) == "text"){echo 'params-text-only';}; ?>">
    <div class="params__container main-container">
        <div class="params__left">
            <?php
                if (get_field('kak_otobrazit_blok' , $post_id) == "text"){
                    ?>
                    <div class="params__text">
                        <?php the_field('otobrazhaemyj_tekst_new' , $post_id)?>
                    </div>
                    <?php
                } else {
                    ?>
                    <h2 class="params__title section-title">
                        <?php the_field('zagolovok_bloka_czifry' , $post_id)?>
                    </h2>
                    <?php
                    if (get_field('podzagolovok_bloka_cifri', $post_id)){
                        the_field('podzagolovok_bloka_cifri', $post_id);
                    }
                    ?>
                    <div class="params__content">
                        <?php
                        if( have_rows('perechen_czifrovyh_pokazatelej', $post_id) ):
                            ?>
                            <?php
                            while( have_rows('perechen_czifrovyh_pokazatelej', $post_id) ) : the_row();
                                $big = get_sub_field('pole_so_znachenium');
                                $desc = get_sub_field('pole_s_opisaniem');
                                ?>
                                <div class="params__row">
                                    <div class="big">
                                        <?php echo $big?>
                                    </div>
                                    <div class="small">
                                        <?php echo $desc?>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        <?php
                        endif;
                        ?>
                    </div>
                    <?php
                }
            ?>
        </div>

            <?php
            if( have_rows('slajder_fotografij', $post_id) ):
                ?>
                <div class="params__right swiper">
                    <div class="swiper-wrapper">
                        <?php
                        while( have_rows('slajder_fotografij', $post_id) ) : the_row();
                            $image = get_sub_field('izobrazhenie_slajdera');
                            $alt = get_sub_field('opisanie_slajda');
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $image?>" alt="<?php echo $alt?>">
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="banner__nav">
                        <div class="banner__prev">
                            <svg width="37" height="15" viewBox="0 0 37 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292892 6.7929C-0.0976296 7.18342 -0.0976295 7.81659 0.292893 8.20711L6.65686 14.5711C7.04738 14.9616 7.68054 14.9616 8.07107 14.5711C8.46159 14.1805 8.46159 13.5474 8.07107 13.1569L2.41422 7.5L8.07107 1.84315C8.46159 1.45262 8.46159 0.819459 8.07107 0.428935C7.68054 0.0384104 7.04738 0.0384104 6.65685 0.428935L0.292892 6.7929ZM37 6.5L1 6.5L1 8.5L37 8.5L37 6.5Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="banner__next">
                            <svg width="37" height="15" viewBox="0 0 37 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.7071 8.20711C37.0976 7.81658 37.0976 7.18342 36.7071 6.79289L30.3431 0.428932C29.9526 0.0384078 29.3195 0.0384078 28.9289 0.428932C28.5384 0.819457 28.5384 1.45262 28.9289 1.84315L34.5858 7.5L28.9289 13.1569C28.5384 13.5474 28.5384 14.1805 28.9289 14.5711C29.3195 14.9616 29.9526 14.9616 30.3431 14.5711L36.7071 8.20711ZM0 8.5H36V6.5H0V8.5Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        <?php
            if (get_field('video_vmesto_slajdera' , $post_id) > '')   {
                ?>
                <div class="params__right params video">
                    <video width="100%" height="100%" poster="<?php echo the_field('oblozhka_dlya_video' , $post_id)?>" autoplay preload="metadata" loop  muted playsinline>
                        <source src="<?php echo the_field('video_vmesto_slajdera' , $post_id)?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <?php
            }
        ?>

    </div>
</section>
